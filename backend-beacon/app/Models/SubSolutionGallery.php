<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubSolutionGallery extends Model
{
    protected $fillable = [
        'sub_solution_id',
        'image',
        'caption',
        'sort_order',
    ];

    public function subSolution(): BelongsTo
    {
        return $this->belongsTo(SubSolution::class);
    }
}
