<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Interviewee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'image',
        'slug',
        'category_id',
        'interviewee_id'
    ];

    public function getCategoryRelation(){
        return $this->belongsTo(Category::class,foreignKey:'category_id',ownerKey:'id');
    }
    public function getIntervieweeRelation(){
        return $this->belongsTo(Interviewee::class,foreignKey:'interviewee_id',ownerKey:'id');
    }

}
