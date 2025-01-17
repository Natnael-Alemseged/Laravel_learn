<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmpolyerFactory> */
    use HasFactory;


    public function jobs(){

        return $this->hasMany(Jobs::class);
    }

    public function posts(){

        return $this->hasMany(Post::class);
    }
}
