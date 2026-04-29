<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'sub_solution_id',
        'name',
        'slug',
        'highlight_points',
        'description',
        'thumbnail',
        'main_image',
        'brochure_pdf',
        'link_lkpp_general',
        'link_lkpp_regency',
        'link_tkdn',
        'use_case',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'highlight_points' => 'array',
    ];

    public function subSolution(): BelongsTo
    {
        return $this->belongsTo(SubSolution::class);
    }

    public function deviceSeries(): BelongsToMany
    {
        return $this->belongsToMany(DeviceSeries::class, 'product_device_series');
    }

    public function components(): HasMany
    {
        return $this->hasMany(ProductComponent::class)->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
