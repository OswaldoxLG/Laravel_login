<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table="usuarios";

    protected $fillable = ['name', 'email', 'email_verified_at', 'password'];

    protected $primaryKey = 'id';
}
