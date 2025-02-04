<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Jobs extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];


    public function employer()
    {

        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class, foreignPivotKey:'job_listing_id');
    }
}
