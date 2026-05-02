<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Client;
use App\Models\ComponentSpec;
use App\Models\DeviceSeries;
use App\Models\PageSetting;
use App\Models\Product;
use App\Models\ProductComponent;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectGallery;
use App\Models\Solution;
use App\Models\SubSolution;
use App\Models\SubSolutionFeature;
use App\Models\SubSolutionGallery;
use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class CmsContentController extends Controller
{
    /**
     * @var array<string, array<string, mixed>>
     */
    private array $resources = [
        'articles' => [
            'model' => Article::class,
            'slug_from' => 'title',
            'search' => ['title', 'slug', 'category', 'author'],
            'default_sort' => ['published_at', 'desc'],
            'json' => ['tags'],
            'file_fields' => ['thumbnail' => 'articles/thumbnails'],
            'relations' => [],
        ],
        'clients' => [
            'model' => Client::class,
            'search' => ['name', 'website'],
            'default_sort' => ['created_at', 'desc'],
            'file_fields' => ['logo' => 'clients/logos'],
            'relations' => ['projects'],
        ],
        'testimonials' => [
            'model' => Testimonial::class,
            'search' => ['name', 'position', 'organization', 'quote'],
            'default_sort' => ['sort_order', 'asc'],
            'file_fields' => ['photo' => 'testimonials/photos'],
            'relations' => ['client', 'project'],
        ],
        'solutions' => [
            'model' => Solution::class,
            'slug_from' => 'name',
            'search' => ['name', 'slug', 'description'],
            'default_sort' => ['sort_order', 'asc'],
            'file_fields' => [
                'thumbnail' => 'solutions/thumbnails',
                'icon' => 'solutions/icons',
            ],
            'relations' => ['subSolutions'],
        ],
        'sub-solutions' => [
            'model' => SubSolution::class,
            'slug_from' => 'name',
            'search' => ['name', 'slug', 'abbreviation'],
            'default_sort' => ['sort_order', 'asc'],
            'file_fields' => [
                'icon' => 'sub-solutions/icons',
                'thumbnail' => 'sub-solutions/thumbnails',
                'file_3d_local' => 'sub-solutions/3d',
            ],
            'relations' => ['solution', 'features', 'gallery', 'products'],
        ],
        'products' => [
            'model' => Product::class,
            'slug_from' => 'name',
            'search' => ['name', 'slug', 'description'],
            'default_sort' => ['sort_order', 'asc'],
            'json' => ['highlight_points'],
            'file_fields' => [
                'thumbnail' => 'products/thumbnails',
                'main_image' => 'products/images',
                'brochure_pdf' => 'products/brochures',
            ],
            'relations' => ['subSolution', 'components.specs', 'deviceSeries'],
        ],
        'project-categories' => [
            'model' => ProjectCategory::class,
            'slug_from' => 'name',
            'search' => ['name', 'slug'],
            'default_sort' => ['name', 'asc'],
            'relations' => ['projects'],
        ],
        'projects' => [
            'model' => Project::class,
            'slug_from' => 'name',
            'search' => ['name', 'slug', 'location', 'year'],
            'default_sort' => ['sort_order', 'asc'],
            'file_fields' => [
                'thumbnail' => 'projects/thumbnails',
                'main_image' => 'projects/images',
            ],
            'relations' => ['client', 'category', 'gallery'],
        ],
        'page-settings' => [
            'model' => PageSetting::class,
            'search' => ['key', 'group', 'value'],
            'default_sort' => ['group', 'asc'],
            'relations' => [],
        ],
        'device-series' => [
            'model' => DeviceSeries::class,
            'search' => ['name', 'type'],
            'default_sort' => ['created_at', 'desc'],
            'file_fields' => [
                'image_1' => 'device-series/images',
                'image_2' => 'device-series/images',
            ],
            'relations' => ['products'],
        ],
        'product-components' => [
            'model' => ProductComponent::class,
            'search' => ['name', 'type'],
            'default_sort' => ['sort_order', 'asc'],
            'file_fields' => [
                'image_1' => 'components/images',
                'image_2' => 'components/images',
            ],
            'relations' => ['product', 'specs'],
        ],
        'component-specs' => [
            'model' => ComponentSpec::class,
            'search' => ['category', 'spec_name', 'spec_value'],
            'default_sort' => ['sort_order', 'asc'],
            'relations' => ['component'],
        ],
        'sub-solution-features' => [
            'model' => SubSolutionFeature::class,
            'search' => ['title', 'description'],
            'default_sort' => ['sort_order', 'asc'],
            'relations' => ['subSolution'],
        ],
        'sub-solution-galleries' => [
            'model' => SubSolutionGallery::class,
            'search' => ['caption'],
            'default_sort' => ['sort_order', 'asc'],
            'file_fields' => ['image' => 'sub-solutions/gallery'],
            'relations' => ['subSolution'],
        ],
        'project-galleries' => [
            'model' => ProjectGallery::class,
            'search' => ['caption'],
            'default_sort' => ['sort_order', 'asc'],
            'file_fields' => ['image' => 'projects/gallery'],
            'relations' => ['project'],
        ],
    ];

    public function index(Request $request, string $resource): JsonResponse
    {
        $config = $this->resourceConfig($resource);
        $query = $config['model']::query();

        if ($request->boolean('with_inactive') === false && $this->hasColumn($config['model'], 'is_active')) {
            $query->where('is_active', true);
        }

        if ($search = $request->query('search')) {
            $query->where(function ($query) use ($config, $search): void {
                foreach ($config['search'] ?? [] as $column) {
                    $query->orWhere($column, 'like', "%{$search}%");
                }
            });
        }

        if ($request->filled('group') && $resource === 'page-settings') {
            $query->where('group', $request->query('group'));
        }

        if ($request->filled('include')) {
            $query->with($this->requestedRelations($request, $config));
        }

        [$sortColumn, $sortDirection] = $this->sort($request, $config);
        $query->orderBy($sortColumn, $sortDirection);

        return response()->json($query->paginate($request->integer('per_page', 15)));
    }

    public function store(Request $request, string $resource): JsonResponse
    {
        $config = $this->resourceConfig($resource);
        $payload = $this->payload($request, $config);
        $validator = Validator::make($payload, $this->rules($resource, $payload));

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $record = DB::transaction(function () use ($config, $payload) {
            $model = $config['model'];
            $record = $model::create($this->recordAttributes($payload));
            $this->syncNestedData($record, $payload);

            return $record->fresh($config['relations'] ?? []);
        });

        return response()->json($record, Response::HTTP_CREATED);
    }

    public function show(Request $request, string $resource, string $record): JsonResponse
    {
        $config = $this->resourceConfig($resource);
        $query = $config['model']::query();

        if ($request->filled('include')) {
            $query->with($this->requestedRelations($request, $config));
        }

        return response()->json($this->findRecord($query, $record));
    }

    public function update(Request $request, string $resource, string $record): JsonResponse
    {
        $config = $this->resourceConfig($resource);
        $existing = $this->findRecord($config['model']::query(), $record);
        $payload = $this->payload($request, $config);
        $validator = Validator::make($payload, $this->rules($resource, $payload, $existing));

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $updated = DB::transaction(function () use ($config, $existing, $payload) {
            $existing->update($this->recordAttributes($payload));
            $this->syncNestedData($existing, $payload);

            return $existing->fresh($config['relations'] ?? []);
        });

        return response()->json($updated);
    }

    public function destroy(string $resource, string $record): JsonResponse
    {
        $config = $this->resourceConfig($resource);
        $existing = $this->findRecord($config['model']::query(), $record);
        $existing->delete();

        return response()->json([
            'message' => 'Deleted successfully.',
        ]);
    }

    private function resourceConfig(string $resource): array
    {
        abort_unless(isset($this->resources[$resource]), Response::HTTP_NOT_FOUND, 'CMS resource not found.');

        return $this->resources[$resource];
    }

    private function payload(Request $request, array $config): array
    {
        $payload = $request->all();

        foreach ($config['json'] ?? [] as $field) {
            if (isset($payload[$field]) && is_string($payload[$field])) {
                $decoded = json_decode($payload[$field], true);
                $payload[$field] = json_last_error() === JSON_ERROR_NONE ? $decoded : $payload[$field];
            }
        }

        foreach (['is_active', 'is_featured'] as $field) {
            if (array_key_exists($field, $payload)) {
                $payload[$field] = filter_var($payload[$field], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
            }
        }

        foreach ($config['file_fields'] ?? [] as $field => $directory) {
            if ($request->hasFile($field)) {
                $payload[$field] = $request->file($field)->store($directory, 'public');
            }
        }

        if (! isset($payload['slug']) && isset($config['slug_from'], $payload[$config['slug_from']])) {
            $payload['slug'] = Str::slug($payload[$config['slug_from']]);
        }

        return $payload;
    }

    private function rules(string $resource, array $payload, ?Model $record = null): array
    {
        $id = $record?->getKey();

        return match ($resource) {
            'articles' => [
                'title' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'slug' => [$record ? 'sometimes' : 'required', 'string', 'max:255', Rule::unique('articles', 'slug')->ignore($id)],
                'excerpt' => ['nullable', 'string'],
                'content' => ['nullable', 'string'],
                'thumbnail' => ['nullable', 'string', 'max:255'],
                'category' => ['nullable', 'string', 'max:255'],
                'category_color' => ['nullable', 'string', 'max:20'],
                'author' => ['nullable', 'string', 'max:255'],
                'read_time' => ['nullable', 'string', 'max:255'],
                'tags' => ['nullable', 'array'],
                'tags.*' => ['string', 'max:255'],
                'published_at' => ['nullable', 'date'],
                'is_active' => ['nullable', 'boolean'],
                'is_featured' => ['nullable', 'boolean'],
            ],
            'clients' => [
                'name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'logo' => ['nullable', 'string', 'max:255'],
                'website' => ['nullable', 'url', 'max:255'],
                'is_active' => ['nullable', 'boolean'],
            ],
            'testimonials' => [
                'client_id' => ['nullable', 'integer', 'exists:clients,id'],
                'project_id' => ['nullable', 'integer', 'exists:projects,id'],
                'name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'position' => ['nullable', 'string', 'max:255'],
                'organization' => ['nullable', 'string', 'max:255'],
                'quote' => [$record ? 'sometimes' : 'required', 'string'],
                'photo' => ['nullable', 'string', 'max:255'],
                'initials' => ['nullable', 'string', 'max:10'],
                'is_featured' => ['nullable', 'boolean'],
                'sort_order' => ['nullable', 'integer'],
                'is_active' => ['nullable', 'boolean'],
            ],
            'solutions' => [
                'name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'slug' => [$record ? 'sometimes' : 'required', 'string', 'max:255', Rule::unique('solutions', 'slug')->ignore($id)],
                'description' => ['nullable', 'string'],
                'thumbnail' => ['nullable', 'string', 'max:255'],
                'icon' => ['nullable', 'string', 'max:255'],
                'color' => ['nullable', 'string', 'max:20'],
                'sort_order' => ['nullable', 'integer'],
                'is_active' => ['nullable', 'boolean'],
            ],
            'sub-solutions' => [
                'solution_id' => [$record ? 'sometimes' : 'required', 'integer', 'exists:solutions,id'],
                'name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'slug' => [$record ? 'sometimes' : 'required', 'string', 'max:255', Rule::unique('sub_solutions', 'slug')->ignore($id)],
                'abbreviation' => ['nullable', 'string', 'max:20'],
                'main_content' => ['nullable', 'string'],
                'support_content' => ['nullable', 'string'],
                'application_content' => ['nullable', 'string'],
                'icon' => ['nullable', 'string', 'max:255'],
                'thumbnail' => ['nullable', 'string', 'max:255'],
                'video_url' => ['nullable', 'url', 'max:255'],
                'file_3d_local' => ['nullable', 'string', 'max:255'],
                'link_3d' => ['nullable', 'url', 'max:255'],
                'sort_order' => ['nullable', 'integer'],
                'is_active' => ['nullable', 'boolean'],
            ],
            'products' => [
                'sub_solution_id' => [$record ? 'sometimes' : 'required', 'integer', 'exists:sub_solutions,id'],
                'name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'slug' => [$record ? 'sometimes' : 'required', 'string', 'max:255', Rule::unique('products', 'slug')->ignore($id)],
                'highlight_points' => ['nullable', 'array'],
                'highlight_points.*' => ['string', 'max:255'],
                'description' => ['nullable', 'string'],
                'thumbnail' => ['nullable', 'string', 'max:255'],
                'main_image' => ['nullable', 'string', 'max:255'],
                'brochure_pdf' => ['nullable', 'string', 'max:255'],
                'link_lkpp_general' => ['nullable', 'url', 'max:255'],
                'link_lkpp_regency' => ['nullable', 'url', 'max:255'],
                'link_tkdn' => ['nullable', 'url', 'max:255'],
                'use_case' => ['nullable', 'string'],
                'sort_order' => ['nullable', 'integer'],
                'is_active' => ['nullable', 'boolean'],
                'device_series_ids' => ['nullable', 'array'],
                'device_series_ids.*' => ['integer', 'exists:device_series,id'],
                'components' => ['nullable', 'array'],
                'components.*.name' => ['required', 'string', 'max:255'],
                'components.*.type' => ['required', 'string', 'max:255'],
                'components.*.image_1' => ['nullable', 'string', 'max:255'],
                'components.*.image_2' => ['nullable', 'string', 'max:255'],
                'components.*.sort_order' => ['nullable', 'integer'],
                'components.*.specs' => ['nullable', 'array'],
                'components.*.specs.*.category' => ['required', 'string', 'max:255'],
                'components.*.specs.*.spec_name' => ['required', 'string', 'max:255'],
                'components.*.specs.*.spec_value' => ['required', 'string'],
                'components.*.specs.*.sort_order' => ['nullable', 'integer'],
            ],
            'project-categories' => [
                'name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'slug' => [$record ? 'sometimes' : 'required', 'string', 'max:255', Rule::unique('project_categories', 'slug')->ignore($id)],
            ],
            'projects' => [
                'client_id' => ['nullable', 'integer', 'exists:clients,id'],
                'project_category_id' => ['nullable', 'integer', 'exists:project_categories,id'],
                'name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'slug' => [$record ? 'sometimes' : 'required', 'string', 'max:255', Rule::unique('projects', 'slug')->ignore($id)],
                'location' => ['nullable', 'string', 'max:255'],
                'year' => ['nullable', 'string', 'max:10'],
                'website' => ['nullable', 'url', 'max:255'],
                'description' => ['nullable', 'string'],
                'challenge_content' => ['nullable', 'string'],
                'solution_content' => ['nullable', 'string'],
                'thumbnail' => ['nullable', 'string', 'max:255'],
                'main_image' => ['nullable', 'string', 'max:255'],
                'white_paper_url' => ['nullable', 'url', 'max:255'],
                'is_featured' => ['nullable', 'boolean'],
                'sort_order' => ['nullable', 'integer'],
                'is_active' => ['nullable', 'boolean'],
            ],
            'page-settings' => [
                'key' => [$record ? 'sometimes' : 'required', 'string', 'max:255', Rule::unique('page_settings', 'key')->ignore($id)],
                'value' => ['nullable', 'string'],
                'group' => ['nullable', 'string', 'max:50'],
            ],
            'device-series' => [
                'name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'type' => ['nullable', 'string', 'max:50'],
                'image_1' => ['nullable', 'string', 'max:255'],
                'image_2' => ['nullable', 'string', 'max:255'],
            ],
            'product-components' => [
                'product_id' => [$record ? 'sometimes' : 'required', 'integer', 'exists:products,id'],
                'name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'type' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'image_1' => ['nullable', 'string', 'max:255'],
                'image_2' => ['nullable', 'string', 'max:255'],
                'sort_order' => ['nullable', 'integer'],
            ],
            'component-specs' => [
                'product_component_id' => [$record ? 'sometimes' : 'required', 'integer', 'exists:product_components,id'],
                'category' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'spec_name' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'spec_value' => [$record ? 'sometimes' : 'required', 'string'],
                'sort_order' => ['nullable', 'integer'],
            ],
            'sub-solution-features' => [
                'sub_solution_id' => [$record ? 'sometimes' : 'required', 'integer', 'exists:sub_solutions,id'],
                'title' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'description' => ['nullable', 'string'],
                'icon' => ['nullable', 'string', 'max:255'],
                'sort_order' => ['nullable', 'integer'],
            ],
            'sub-solution-galleries' => [
                'sub_solution_id' => [$record ? 'sometimes' : 'required', 'integer', 'exists:sub_solutions,id'],
                'image' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'caption' => ['nullable', 'string', 'max:255'],
                'sort_order' => ['nullable', 'integer'],
            ],
            'project-galleries' => [
                'project_id' => [$record ? 'sometimes' : 'required', 'integer', 'exists:projects,id'],
                'image' => [$record ? 'sometimes' : 'required', 'string', 'max:255'],
                'caption' => ['nullable', 'string', 'max:255'],
                'sort_order' => ['nullable', 'integer'],
            ],
        };
    }

    private function recordAttributes(array $payload): array
    {
        return collect($payload)
            ->except(['components', 'device_series_ids'])
            ->toArray();
    }

    private function syncNestedData(Model $record, array $payload): void
    {
        if ($record instanceof Product && array_key_exists('device_series_ids', $payload)) {
            $record->deviceSeries()->sync($payload['device_series_ids'] ?? []);
        }

        if ($record instanceof Product && array_key_exists('components', $payload)) {
            $record->components()->delete();

            foreach ($payload['components'] ?? [] as $componentData) {
                $specs = $componentData['specs'] ?? [];
                unset($componentData['specs']);

                $component = $record->components()->create($componentData);
                $component->specs()->createMany($specs);
            }
        }
    }

    private function findRecord($query, string $record): Model
    {
        if (is_numeric($record)) {
            return $query->findOrFail($record);
        }

        $model = $query->getModel();

        if ($this->hasColumn($model::class, 'slug')) {
            return $query->where('slug', $record)->firstOrFail();
        }

        if ($this->hasColumn($model::class, 'key')) {
            return $query->where('key', $record)->firstOrFail();
        }

        return $query->findOrFail($record);
    }

    private function requestedRelations(Request $request, array $config): array
    {
        $allowed = $config['relations'] ?? [];
        $requested = array_filter(explode(',', (string) $request->query('include')));

        return array_values(array_intersect($requested, $allowed));
    }

    private function sort(Request $request, array $config): array
    {
        $default = $config['default_sort'] ?? ['created_at', 'desc'];
        $column = (string) $request->query('sort_by', $default[0]);
        $direction = strtolower((string) $request->query('sort_dir', $default[1])) === 'asc' ? 'asc' : 'desc';
        $sortableColumns = array_merge(
            ['id', 'created_at', 'updated_at'],
            (new $config['model'])->getFillable(),
        );

        if (! in_array($column, $sortableColumns, true)) {
            $column = $default[0];
        }

        return [$column, $direction];
    }

    private function hasColumn(string $model, string $column): bool
    {
        return in_array($column, (new $model)->getFillable(), true);
    }
}
