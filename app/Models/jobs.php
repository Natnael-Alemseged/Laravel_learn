<?php

namespace  app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Jobs extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable=['title', 'salary'];


}
