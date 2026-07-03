<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'user_id',
        'category',
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'status',
        'feature_blog'
    ];
    use SoftDeletes;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
