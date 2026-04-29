<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Solution extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'thumbnail',
        'icon',
        'color',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function subSolutions(): HasMany
    {
        return $this->hasMany(SubSolution::class)->orderBy('sort_order');
    }

    /**
     * Get all products through sub-solutions.
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, SubSolution::class);
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
