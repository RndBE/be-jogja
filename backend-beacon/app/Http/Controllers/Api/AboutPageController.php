<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\CompanyContribution;
use App\Models\CompanyMilestone;
use App\Models\PageSetting;

class AboutPageController extends Controller
{
    /**
     * GET /api/v1/about-page
     * Returns all dynamic content for the Tentang Kami page.
     */
    public function index()
    {
        // Visi & Misi from PageSetting (group: about)
        $aboutSettings = PageSetting::where('group', 'about')->get()->pluck('value', 'key');

        // Timeline milestones
        $milestones = CompanyMilestone::active()
            ->orderBy('sort_order')
            ->get()
            ->map(fn ($m) => [
                'year' => $m->year,
                'title' => $m->title,
                'desc' => $m->description,
            ]);

        // Certifications
        $certifications = Certification::active()
            ->orderBy('sort_order')
            ->get()
            ->map(fn ($c) => [
                'title' => $c->title,
                'subtitle' => $c->subtitle,
                'desc' => $c->description,
                'style' => $c->style,
                'icon_name' => $c->icon_name,
                'status_label' => $c->status_label,
            ]);

        // Contributions
        $contributions = CompanyContribution::active()
            ->orderBy('sort_order')
            ->get()
            ->map(fn ($c) => [
                'title' => $c->title,
                'desc' => $c->description,
                'metric' => $c->metric,
                'metric_label' => $c->metric_label,
                'icon_name' => $c->icon_name,
            ]);

        return response()->json([
            'visi' => $aboutSettings['visi'] ?? null,
            'misi' => json_decode($aboutSettings['misi'] ?? '[]', true),
            'hero_title' => $aboutSettings['hero_title'] ?? null,
            'hero_subtitle' => $aboutSettings['hero_subtitle'] ?? null,
            'hero_tagline' => $aboutSettings['hero_tagline'] ?? null,
            'milestones' => $milestones,
            'certifications' => $certifications,
            'contributions' => $contributions,
        ]);
    }
}
