<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;

class FrontController extends Controller
{
    public function index()
    {
        return view('competition-index', [
            'title' => "Competitions"
        ]);
    }

    public function show($slug)
    {
        $data = Competition::where('slug', $slug)->first();
        return view('competition-show', [
            'data' => $data
        ]);
    }

    public function showTest()
    {
        return view('test');
    }
}
