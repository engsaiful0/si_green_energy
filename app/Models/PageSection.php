<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_key',
        'section_name',
        'section_type',
        'title',
        'subtitle',
        'content',
        'image',
        'button_text',
        'button_url',
        'is_active',
        'order',
    ];

    protected $casts = [
        'content' => 'array',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];
}
