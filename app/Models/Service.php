<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'short_description',
        'description',
        'features',
        'icon',
        'featured_image',
        'is_featured',
        'status',
        'meta_title',
        'meta_description',
        'order',
        'views',
    ];

    protected $casts = [
        'features' => 'array',
        'is_featured' => 'boolean',
        'order' => 'integer',
        'views' => 'integer',
    ];

    /**
     * Get the category that owns the service.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    /**
     * Get the images for the service.
     */
    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }
}
