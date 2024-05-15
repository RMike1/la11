<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interviewee extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'firstName',
        'secondName',
        'image',
        'is_verified',
        'socialmedia_id'
    ];

    public function categoryRelation(){
        return $this->belongsToMany(Category::class,table:'category_interviewee',foreignPivotKey:'interviewee_id',relatedPivotKey:'category_id');
    }

    public function socialMediaRelation(){
        return $this->belongsToMany(Socialmedia::class,table:'interviewee_socialmedia',foreignPivotKey:'interviewee_id',relatedPivotKey:'socialmedia_id');
    }
}

