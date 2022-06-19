<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
