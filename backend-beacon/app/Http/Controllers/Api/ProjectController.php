<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * GET /api/v1/projects?category=irigasi&year=2024&page=1
     */
    public function index()
    {
        $query = Project::active()
            ->with(['client:id,name,logo', 'category:id,name,slug'])
            ->ordered();

        if ($categorySlug = request('category')) {
            $query->whereHas('category', fn ($q) => $q->where('slug', $categorySlug));
        }

        if ($year = request('year')) {
            $query->where('year', $year);
        }

        $perPage = min((int) request('per_page', 12), 100);
        $projects = $query->paginate($perPage)->through(fn ($p) => [
            'id' => $p->id,
            'name' => $p->name,
            'slug' => $p->slug,
            'thumbnail' => $p->thumbnail ? asset('storage/' . $p->thumbnail) : null,
            'year' => $p->year,
            'location' => $p->location,
            'is_featured' => $p->is_featured,
            'client_name' => $p->client?->name,
            'client_logo' => $p->client?->logo ? asset('storage/' . $p->client->logo) : null,
            'category_name' => $p->category?->name,
            'category_slug' => $p->category?->slug,
        ]);

        return response()->json($projects);
    }

    /**
     * GET /api/v1/projects/featured
     */
    public function featured()
    {
        $projects = Project::active()
            ->featured()
            ->with(['client:id,name,logo', 'category:id,name,slug'])
            ->ordered()
            ->limit(6)
            ->get()
            ->map(fn ($p) => [
                'id' => $p->id,
                'name' => $p->name,
                'slug' => $p->slug,
                'thumbnail' => $p->thumbnail ? asset('storage/' . $p->thumbnail) : null,
                'year' => $p->year,
                'location' => $p->location,
                'client_name' => $p->client?->name,
                'category_name' => $p->category?->name,
            ]);

        return response()->json($projects);
    }

    /**
     * GET /api/v1/projects/{slug}
     */
    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)
            ->active()
            ->with(['client', 'category', 'gallery'])
            ->firstOrFail();

        // Related projects from same category
        $related = Project::active()
            ->where('id', '!=', $project->id)
            ->where('project_category_id', $project->project_category_id)
            ->limit(4)
            ->get()
            ->map(fn ($p) => [
                'name' => $p->name,
                'slug' => $p->slug,
                'thumbnail' => $p->thumbnail ? asset('storage/' . $p->thumbnail) : null,
                'year' => $p->year,
            ]);

        return response()->json([
            'project' => [
                'id' => $project->id,
                'name' => $project->name,
                'slug' => $project->slug,
                'location' => $project->location,
                'year' => $project->year,
                'website' => $project->website,
                'description' => $project->description,
                'challenge_content' => $project->challenge_content,
                'solution_content' => $project->solution_content,
                'thumbnail' => $project->thumbnail ? asset('storage/' . $project->thumbnail) : null,
                'main_image' => $project->main_image ? asset('storage/' . $project->main_image) : null,
                'white_paper_url' => $project->white_paper_url,
            ],
            'client' => $project->client ? [
                'name' => $project->client->name,
                'logo' => $project->client->logo ? asset('storage/' . $project->client->logo) : null,
                'website' => $project->client->website,
            ] : null,
            'category' => $project->category ? [
                'name' => $project->category->name,
                'slug' => $project->category->slug,
            ] : null,
            'gallery' => $project->gallery->map(fn ($g) => [
                'id' => $g->id,
                'image' => asset('storage/' . $g->image),
                'caption' => $g->caption,
            ]),
            'related_projects' => $related,
        ]);
    }
}
