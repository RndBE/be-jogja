<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\PageSetting;
use App\Models\Project;
use App\Models\Solution;

class HomepageController extends Controller
{
    /**
     * GET /api/v1/homepage
     * Aggregate endpoint for the homepage.
     */
    public function index()
    {
        $solutions = Solution::active()
            ->ordered()
            ->withCount(['subSolutions', 'products'])
            ->get()
            ->map(fn ($s) => [
                'id' => $s->id,
                'name' => $s->name,
                'slug' => $s->slug,
                'description' => $s->description,
                'thumbnail' => $s->thumbnail ? asset('storage/' . $s->thumbnail) : null,
                'icon' => $s->icon ? asset('storage/' . $s->icon) : null,
                'color' => $s->color,
                'sub_solutions_count' => $s->sub_solutions_count,
                'products_count' => $s->products_count,
            ]);

        $featuredProjects = Project::active()
            ->featured()
            ->with(['client:id,name,logo', 'category:id,name'])
            ->ordered()
            ->limit(6)
            ->get()
            ->map(fn ($p) => [
                'name' => $p->name,
                'slug' => $p->slug,
                'thumbnail' => $p->thumbnail ? asset('storage/' . $p->thumbnail) : null,
                'year' => $p->year,
                'location' => $p->location,
                'client_name' => $p->client?->name,
                'category_name' => $p->category?->name,
            ]);

        $clients = Client::active()
            ->get()
            ->map(fn ($c) => [
                'name' => $c->name,
                'logo' => $c->logo ? asset('storage/' . $c->logo) : null,
                'website' => $c->website,
            ]);

        $stats = PageSetting::getGroup('stats');
        $hero = PageSetting::getGroup('hero');

        return response()->json([
            'hero' => $hero,
            'stats' => $stats,
            'solutions' => $solutions,
            'featured_projects' => $featuredProjects,
            'clients' => $clients,
        ]);
    }

    /**
     * POST /api/v1/contact
     */
    public function contact()
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // TODO: Send email notification, store in DB, etc.

        return response()->json(['success' => true, 'message' => 'Pesan berhasil dikirim.']);
    }
}
