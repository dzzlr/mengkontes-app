<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\News;

class FrontController extends Controller
{
    public function indexCompetitions()
    {
        return view('competition-index', [
            
        ]);
    }

    public function showCompetitions()
    {
        // $data = Competition::where('slug', $slug)->first();
        return view('competition-show', [
            // 'data' => $data
        ]);
    }

    public function indexNews()
    {
        return view('news-index', [
            'data' => News::latest('created_at')->get()
        ]);
    }

    public function showNews($slug)
    {
        return view('news-show', [
            'data' => News::where('slug', $slug)->first()
        ]);
    }

    public function showTest()
    {
        return view('test');
    }
}
