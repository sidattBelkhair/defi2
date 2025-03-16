<?php

namespace App\Models;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;


class Utilisateur extends  Authenticatable
{
    protected $table="users";

    protected $guarded = [];
} 
