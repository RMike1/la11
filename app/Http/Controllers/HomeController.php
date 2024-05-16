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

        $info=Podcast::find(1)->getIntervieweeRelation()->first('is_verified');
        // dd($info);

        return view('user.index',compact('intervieweeData','podcastData'));
    }

    public function show($slug){
        $pod=Podcast::where('slug',$slug)->first();

        $cat_id=Podcast::where('slug',$slug)->first()->category_id;
        $relatedEpisodes=Podcast::where('id','!=',$pod->id)->where('category_id',$cat_id)->get();

        // dd($relatedEpisodes);

        return view('user.podcast-details',compact('pod','relatedEpisodes'));
    }
}


