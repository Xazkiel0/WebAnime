<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::take(3)->get();
        return view('LandingPage', compact('articles'));
    }
}
