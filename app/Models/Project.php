<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'short_description',
        'description',
        'client_name',
        'location',
        'completion_date',
        'project_value',
        'featured_image',
        'is_featured',
        'status',
        'meta_title',
        'meta_description',
        'order',
        'views',
    ];

    protected $casts = [
        'completion_date' => 'date',
        'project_value' => 'decimal:2',
        'is_featured' => 'boolean',
        'order' => 'integer',
        'views' => 'integer',
    ];

    /**
     * Get the category that owns the project.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    /**
     * Get the images for the project.
     */
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    /**
     * The tags that belong to the project.
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(ProjectTag::class, 'project_tag');
    }
}
