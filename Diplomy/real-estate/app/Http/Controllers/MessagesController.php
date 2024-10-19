<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class MessagesController extends Controller
{
    public function showarticle()
    {


        return view('layouts.list', ['articl' => Article::all()]);
    }
    public function message($id)
    {
        $article = Article::find($id);
        return view('layouts.message', ['article' => $article]);
    }

    public function update($id)
    {

        $article = Article::find($id);
        return view('layouts.update', ['article' => $article]);
    }
    public function updatesubmit($id, Request $red)
    {
        $article = Article::find($id);

        $article->heading = $red->input('heading');
        $article->text = $red->input('text');
        $article->author = $red->input('author');
        $article->img = $red->input('img');
        $article->save();
        return redirect()->route('message', $id);
    }
    public function messagedelete($id)
    {
        Article::find($id)->delete();
        return redirect()->route('list');
    }

    public function сreatesubmit(Request $red)
    {

        $article = new Article();
        $article->heading = $red->input('heading');
        $article->text = $red->input('text');
        $article->author = $red->input('author');
        $article->img = $red->input('img');
        $article->save();
        return redirect()->route('list');
    }
}
