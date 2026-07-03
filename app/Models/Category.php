<?php

namespace App\Models;

use App\Models\Service;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'title',
        'description',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'image'
    ];

    public function service()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
    
}
