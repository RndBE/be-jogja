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
                $q->active()->with(['components', 'deviceSeries']);
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
                'icon' => $subSolution->icon ? asset('storage/' . $subSolution->icon) : null,
                'video_url' => $subSolution->video_url,
                'file_3d_local' => $subSolution->file_3d_local ? asset('storage/' . $subSolution->file_3d_local) : null,
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
                'icon' => $f->icon ? asset('storage/' . $f->icon) : null,
            ]),
            'gallery' => $subSolution->gallery->map(fn ($g) => [
                'id' => $g->id,
                'image' => asset('storage/' . $g->image),
                'caption' => $g->caption,
            ]),
            'products' => $subSolution->products->map(fn ($p) => [
                'id' => $p->id,
                'name' => $p->name,
                'slug' => $p->slug,
                'highlight_points' => $p->highlight_points,
                'description' => $p->description,
                'thumbnail' => $p->thumbnail ? asset('storage/' . $p->thumbnail) : null,
                'main_image' => $p->main_image ? asset('storage/' . $p->main_image) : null,
                'brochure_pdf' => $p->brochure_pdf ? asset('storage/' . $p->brochure_pdf) : null,
                'link_lkpp_general' => $p->link_lkpp_general,
                'link_lkpp_regency' => $p->link_lkpp_regency,
                'link_tkdn' => $p->link_tkdn,
                'use_case' => $p->use_case,
                'components' => $p->components->map(fn ($c) => [
                    'title' => $c->title,
                    'image' => asset('storage/' . $c->image),
                ]),
                'device_series' => $p->deviceSeries->map(fn ($ds) => [
                    'name' => $ds->name,
                    'type' => $ds->type,
                    'image_1' => $ds->image_1 ? asset('storage/' . $ds->image_1) : null,
                    'image_2' => $ds->image_2 ? asset('storage/' . $ds->image_2) : null,
                ]),
            ]),
        ]);
    }
}
