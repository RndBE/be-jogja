<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DeviceSeries extends Model
{
    protected $table = 'device_series';

    protected $fillable = [
        'name',
        'type',
        'image_1',
        'image_2',
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_device_series');
    }
}
