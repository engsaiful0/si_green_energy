<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'name',
        'slug',
        'designation',
        'bio',
        'photo',
        'email',
        'phone',
        'social_links',
        'is_active',
        'order',
    ];

    protected $casts = [
        'social_links' => 'array',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get the department that owns the team member.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
