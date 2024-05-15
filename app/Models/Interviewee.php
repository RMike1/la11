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
        'category_id',
        'socialmedia_id'
    ];
}
