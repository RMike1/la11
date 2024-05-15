<?php

namespace App\Http\Controllers;

use App\Models\Interviewee;
use App\Models\Podcast;
use Illuminate\Http\Request;

class HomeController
{
    public function index(){

        $intervieweeData=Interviewee::with('categoryRelation','socialMediaRelation')->get();
        $podcastData=Podcast::with('getCategoryRelation','getIntervieweeRelation')->get();

        $info=Podcast::find(1)->getIntervieweeRelation()->get();
        // dd($podcastData);

        return view('user.index',compact('intervieweeData','podcastData'));
    }
}
