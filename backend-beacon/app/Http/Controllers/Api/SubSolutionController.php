<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubSolution;

class SubSolutionController extends Controller
{
    /**
     * GET /api/v1/sub-solutions/{slug}
     * Full detail: features, gallery, products, related projects.
     */
    public function show(string $slug)
    {
        $subSolution = SubSolution::where('slug', $slug)
            ->active()
            ->with(['solution', 'features', 'gallery', 'products' => function ($q) {
                $q->active()->with(['components.specs', 'deviceSeries']);
            }, 'trackRecords' => function ($q) {
                $q->active()->orderBy('sort_order');
            }])
            ->firstOrFail();

        return response()->json([
            'sub_solution' => [
                'id' => $subSolution->id,
                'name' => $subSolution->name,
                'slug' => $subSolution->slug,
                'abbreviation' => $subSolution->abbreviation,
                'main_content' => $subSolution->main_content,
                'support_content' => $subSolution->support_content,
                'application_content' => $subSolution->application_content,
                'icon' => $this->storageUrl($subSolution->icon),
                'video_url' => $subSolution->video_url,
                'file_3d_local' => $this->storageUrl($subSolution->file_3d_local),
                'link_3d' => $subSolution->link_3d,
                'solution' => [
                    'name' => $subSolution->solution->name,
                    'slug' => $subSolution->solution->slug,
                    'color' => $subSolution->solution->color,
                ],
            ],
            'features' => $subSolution->features->map(fn ($f) => [
                'id' => $f->id,
                'title' => $f->title,
                'description' => $f->description,
                'icon' => $this->storageUrl($f->icon),
            ]),
            'gallery' => $subSolution->gallery->map(fn ($g) => [
                'id' => $g->id,
                'image' => $this->storageUrl($g->image),
                'caption' => $g->caption,
            ]),
            'products' => $subSolution->products->map(fn ($p) => [
                'id' => $p->id,
                'name' => $p->name,
                'slug' => $p->slug,
                'highlight_points' => $p->highlight_points,
                'description' => $p->description,
                'thumbnail' => $this->storageUrl($p->thumbnail),
                'main_image' => $this->storageUrl($p->main_image),
                'brochure_pdf' => $this->storageUrl($p->brochure_pdf),
                'link_lkpp_general' => $p->link_lkpp_general,
                'link_lkpp_regency' => $p->link_lkpp_regency,
                'link_tkdn' => $p->link_tkdn,
                'use_case' => $p->use_case,
                'components' => $p->components->map(fn ($c) => [
                    'id' => $c->id,
                    'name' => $c->name,
                    'type' => $c->type,
                    'image_1' => $this->storageUrl($c->image_1),
                    'image_2' => $this->storageUrl($c->image_2),
                    'specs' => $c->specs->groupBy('category')->map(fn ($group, $cat) => [
                        'category' => $cat,
                        'items' => $group->map(fn ($s) => [
                            'name' => $s->spec_name,
                            'value' => $s->spec_value,
                        ])->values(),
                    ])->values(),
                ]),
                'device_series' => $p->deviceSeries->map(fn ($ds) => [
                    'name' => $ds->name,
                    'type' => $ds->type,
                    'image_1' => $this->storageUrl($ds->image_1),
                    'image_2' => $this->storageUrl($ds->image_2),
                ]),
            ]),
            'track_records' => $subSolution->trackRecords->map(fn ($tr) => [
                'id' => $tr->id,
                'project_name' => $tr->project_name,
                'client' => $tr->client,
                'year' => $tr->year,
                'location' => $tr->location,
            ]),
        ]);
    }
}
