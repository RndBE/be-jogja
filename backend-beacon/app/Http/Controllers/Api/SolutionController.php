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
                'thumbnail' => $this->storageUrl($s->thumbnail),
                'icon' => $this->storageUrl($s->icon),
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
                'icon' => $this->storageUrl($ss->icon),
                'thumbnail' => $this->storageUrl($ss->thumbnail),
                'products_count' => $ss->products_count,
            ]);

        return response()->json([
            'solution' => [
                'id' => $solution->id,
                'name' => $solution->name,
                'slug' => $solution->slug,
                'description' => $solution->description,
                'thumbnail' => $this->storageUrl($solution->thumbnail),
                'icon' => $this->storageUrl($solution->icon),
                'color' => $solution->color,
            ],
            'sub_solutions' => $subSolutions,
        ]);
    }
}
