<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends User
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'super_admin',
        'status',
        'remember_token',
    ];
}