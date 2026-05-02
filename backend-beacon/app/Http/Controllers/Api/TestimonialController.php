<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * GET /api/v1/testimonials
     */
    public function index()
    {
        $limit = min(max((int) request('limit', 12), 1), 50);

        $testimonials = Testimonial::active()
            ->when(request()->boolean('featured'), fn ($query) => $query->featured())
            ->with(['client:id,name,logo', 'project:id,name,slug'])
            ->ordered()
            ->limit($limit)
            ->get()
            ->map(fn (Testimonial $testimonial) => $this->serialize($testimonial));

        return response()->json($testimonials);
    }

    public static function serialize(Testimonial $testimonial): array
    {
        return [
            'id' => $testimonial->id,
            'name' => $testimonial->name,
            'position' => $testimonial->position,
            'organization' => $testimonial->organization ?: $testimonial->client?->name,
            'quote' => $testimonial->quote,
            'photo' => $testimonial->photo ? asset('storage/'.$testimonial->photo) : null,
            'initials' => $testimonial->displayInitials(),
            'is_featured' => $testimonial->is_featured,
            'client_name' => $testimonial->client?->name,
            'client_logo' => $testimonial->client?->logo ? asset('storage/'.$testimonial->client->logo) : null,
            'project_name' => $testimonial->project?->name,
            'project_slug' => $testimonial->project?->slug,
        ];
    }
}
