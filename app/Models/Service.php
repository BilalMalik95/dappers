<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'services';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'title',
        'short_description',
        'description',
        'status',
        'index',
        'image',
        'meta_title',
        'meta_title',
        'meta_description'

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
