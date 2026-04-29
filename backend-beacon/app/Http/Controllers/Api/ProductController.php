<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * GET /api/v1/products?sub_solution=awlr
     */
    public function index()
    {
        $query = Product::active()->with('subSolution:id,name,slug,abbreviation');

        if ($subSolutionSlug = request('sub_solution')) {
            $query->whereHas('subSolution', fn ($q) => $q->where('slug', $subSolutionSlug));
        }

        $products = $query->orderBy('sort_order')->get()->map(fn ($p) => [
            'id' => $p->id,
            'name' => $p->name,
            'slug' => $p->slug,
            'thumbnail' => $p->thumbnail ? asset('storage/' . $p->thumbnail) : null,
            'sub_solution_name' => $p->subSolution->name,
            'sub_solution_abbreviation' => $p->subSolution->abbreviation,
        ]);

        return response()->json($products);
    }

    /**
     * GET /api/v1/products/{slug}
     */
    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)
            ->active()
            ->with(['subSolution.solution', 'components', 'deviceSeries'])
            ->firstOrFail();

        return response()->json([
            'product' => [
                'id' => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'highlight_points' => $product->highlight_points,
                'description' => $product->description,
                'thumbnail' => $product->thumbnail ? asset('storage/' . $product->thumbnail) : null,
                'main_image' => $product->main_image ? asset('storage/' . $product->main_image) : null,
                'brochure_pdf' => $product->brochure_pdf ? asset('storage/' . $product->brochure_pdf) : null,
                'link_lkpp_general' => $product->link_lkpp_general,
                'link_lkpp_regency' => $product->link_lkpp_regency,
                'link_tkdn' => $product->link_tkdn,
                'use_case' => $product->use_case,
            ],
            'sub_solution' => [
                'name' => $product->subSolution->name,
                'slug' => $product->subSolution->slug,
                'solution_name' => $product->subSolution->solution->name,
                'solution_slug' => $product->subSolution->solution->slug,
            ],
            'components' => $product->components->map(fn ($c) => [
                'title' => $c->title,
                'image' => asset('storage/' . $c->image),
            ]),
            'device_series' => $product->deviceSeries->map(fn ($ds) => [
                'name' => $ds->name,
                'type' => $ds->type,
                'image_1' => $ds->image_1 ? asset('storage/' . $ds->image_1) : null,
                'image_2' => $ds->image_2 ? asset('storage/' . $ds->image_2) : null,
            ]),
        ]);
    }
}
