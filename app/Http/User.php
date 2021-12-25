<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullName', 'idCard', 'YoB', 'role_id', 'address', 'wardId', 'phone', 'email', 'nationalityId', 'password', 'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() {
        return $this->belongsTo('App\Models\Role');
    }

    public function Nationality() {
        return $this->belongsTo('App\Models\Nationality');
    }

    public function Ward() {
        return $this->belongsTo('App\Models\Nationality');
    }

    public function DomesticMoveDeclaration() {
        return $this->hasMany('App\Models\DomesticMoveDeclaration');
    }

    public function EntryDeclaration() {
        return $this->hasMany('App\Models\EntryDeclaration');
    }

    public function DomesticGuestDeclaration() {
        return $this->hasMany('App\Models\DomesticGuestDeclaration');
    }
}
