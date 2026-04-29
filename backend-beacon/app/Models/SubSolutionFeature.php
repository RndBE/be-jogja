<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubSolutionFeature extends Model
{
    protected $fillable = [
        'sub_solution_id',
        'title',
        'description',
        'icon',
        'sort_order',
    ];

    public function subSolution(): BelongsTo
    {
        return $this->belongsTo(SubSolution::class);
    }
}
