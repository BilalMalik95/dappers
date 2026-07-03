<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUsUser extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'message',
        'status',
        'notes',
    ];
}
