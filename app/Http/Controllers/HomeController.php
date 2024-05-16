<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Category;
use App\Models\Interviewee;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class HomeController
{
    use WithPagination;
    public function index()
    {

        $intervieweeData = Interviewee::with('categoryRelation', 'socialMediaRelation')->get();
        $podcastData = Podcast::with('getCategoryRelation', 'getIntervieweeRelation')->get();
        $categories = Category::with('podcasts')->take(4)->latest()->get();

        return view('user.index', compact('intervieweeData', 'podcastData', 'categories'));
    }

    public function show($slug)
    {
        $pod = Podcast::where('slug', $slug)->first();

        $cat_id = Podcast::where('slug', $slug)->first()->category_id;
        $relatedEpisodes = Podcast::where('id', '!=', $pod->id)->where('category_id', $cat_id)->get();

        return view('user.podcast-details', compact('pod', 'relatedEpisodes'));
    }

    public function list_category($slug)
    {
        $relatedEpisodes=Category::where('slug',$slug)->first()->podcasts()->latest()->paginate(3);

        $category_title=Category::where('slug',$slug)->select('title')->first();

        return view('user.podcast-category-list',compact('relatedEpisodes','category_title'));
    }
}
