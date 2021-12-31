<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";

    protected $fillale = [
        'admin_email', 'admin_password', 'admin_name', 'admin_phone'
    ];


}
