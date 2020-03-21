<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('ArticlesMng', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('WriteArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('images/', $request->file('photo')->getClientOriginalName());
            Article::create([
                'name' => $request->name,
                'Content' => $request->Content,
                'category_id' => $request->category,
                'photo' => $request->file('photo')->getClientOriginalName()
            ]);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('ArticleEdit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required',
            'Content' => 'required'
        ]);
        // return $request->all();
        global $fileName;
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('images/', $request->file('photo')->getClientOriginalName());
            $fileName = $request->file('photo')->getClientOriginalName();
        }
        $article->where('id', $article->id)->update([
            'name' => $request->name,
            'Content' => $request->Content,
            'photo' => $fileName
        ]);
        return redirect()->intended('manage/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete($article->id);
        return redirect()->back();
    }
}
