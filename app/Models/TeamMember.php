<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use SoftDeletes;

    protected $table = 'team_members';

    protected $fillable = [
        'name',
        'slug',
        'designation',
        'experience',
        'bio',
        'image',
        'email',
        'phone',
        'linkedin',
        'github',
        'website',
        'skills',
        'is_founder',
        'is_placeholder',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'is_founder' => 'boolean',
        'is_placeholder' => 'boolean',
        'status' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    public function getSkillsListAttribute(): array
    {
        if (!$this->skills) {
            return [];
        }

        return array_filter(array_map('trim', explode(',', $this->skills)));
    }
}
