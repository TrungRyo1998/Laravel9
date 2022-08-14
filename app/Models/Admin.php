<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Admin
 * @package App\Models
 * @property integer id
 * @property string name
 * @property string email
 * @property string password
 * @property string phone_number
 * @property string address
 */
class Admin extends Authenticatable
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'image',
        'email',
        'password',
        'phone_number',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];
}
