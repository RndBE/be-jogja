<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ComponentSpec extends Model
{
    protected $fillable = [
        'product_component_id',
        'category',
        'spec_name',
        'spec_value',
        'sort_order',
    ];

    public function component(): BelongsTo
    {
        return $this->belongsTo(ProductComponent::class, 'product_component_id');
    }
}
