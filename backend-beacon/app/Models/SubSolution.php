<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubSolution extends Model
{
    protected $fillable = [
        'solution_id',
        'name',
        'slug',
        'abbreviation',
        'main_content',
        'support_content',
        'application_content',
        'icon',
        'thumbnail',
        'video_url',
        'file_3d_local',
        'link_3d',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function solution(): BelongsTo
    {
        return $this->belongsTo(Solution::class);
    }

    public function features(): HasMany
    {
        return $this->hasMany(SubSolutionFeature::class)->orderBy('sort_order');
    }

    public function gallery(): HasMany
    {
        return $this->hasMany(SubSolutionGallery::class)->orderBy('sort_order');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class)->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
