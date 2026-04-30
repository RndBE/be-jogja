<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductComponent extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'type',
        'image_1',
        'image_2',
        'sort_order',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function specs(): HasMany
    {
        return $this->hasMany(ComponentSpec::class)->orderBy('sort_order');
    }
}
