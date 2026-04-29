<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Solution;

class SolutionController extends Controller
{
    /**
     * GET /api/v1/solutions
     * List all active solutions with sub-solution & product counts.
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

        return response()->json($solutions);
    }

    /**
     * GET /api/v1/solutions/{slug}
     * Detail solution with its sub-solutions (each with product count).
     */
    public function show(string $slug)
    {
        $solution = Solution::where('slug', $slug)
            ->active()
            ->firstOrFail();

        $subSolutions = $solution->subSolutions()
            ->active()
            ->withCount('products')
            ->get()
            ->map(fn ($ss) => [
                'id' => $ss->id,
                'name' => $ss->name,
                'slug' => $ss->slug,
                'abbreviation' => $ss->abbreviation,
                'icon' => $ss->icon ? asset('storage/' . $ss->icon) : null,
                'products_count' => $ss->products_count,
            ]);

        return response()->json([
            'solution' => [
                'id' => $solution->id,
                'name' => $solution->name,
                'slug' => $solution->slug,
                'description' => $solution->description,
                'thumbnail' => $solution->thumbnail ? asset('storage/' . $solution->thumbnail) : null,
                'icon' => $solution->icon ? asset('storage/' . $solution->icon) : null,
                'color' => $solution->color,
            ],
            'sub_solutions' => $subSolutions,
        ]);
    }
}
