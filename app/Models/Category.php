<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'descriptin',
        'image',
        'slug'
    ];

    public function interviewee(){
        return $this->belongsToMany(interviewee::class);
    }

    public function podcasts(){
        return $this->hasMany(Podcast::class);

    }
}
