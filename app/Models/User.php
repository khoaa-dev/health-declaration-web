<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'fullName',
        'email', 
        'status',
        'token',
        'idCard',
        'YoB',
        'address',
        'wardId',
        'phone',
        'nationalityId',    
        'gender'
    ];
}
