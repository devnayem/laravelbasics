<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Validator;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::paginate(3);
        return view("user", compact('articles'));
    }

    public function store(Request $request){
        // $validator = Validator::make($request->all(),
        // [
        //     "fname" => "required",
        //     "lname" => "required",
        //     "email" => "required",
        //     "position" => "required"
        // ]);

        $validator  = $request->validate([
            "fname" => "required",
            "lname" => "required",
            "email" => "required",
            "position" => "required"
        ]);

        $article = new Article;
        $article->fname = $request->input('fname');
        $article->lname = $request->input('lname');
        $article->email = $request->input('email');
        $article->position = $request->input('position');
        $article->save();

        echo '<script language="javascript">';
        echo 'alert("USER SUCCESSFULLY ADDED!")';
        echo '</script>';

    }

    public function create(){
        return view('addform');
    }

    public function show($id){
        $article = Article::find($id);
        return view('show')->with("article",$article);
    }

    public function edit($id){
        $article = Article::find($id);
        return view('editform')->with("article",$article);
    }

    public function update(Request $request, $id){
        $article = Article::find($id);
        $article->fname = $request->fname;
        $article->lname = $request->lname;
        $article->email = $request->email;
        $article->position = $request->position;
        $article->save();

        echo '<script language="javascript">';
        echo 'alert("USER SUCCESSFULLY UPDATED!")';
        echo '</script>';

    }

    public function destroy($id){
        Article::destroy($id);
        echo '<script language="javascript">';
        echo 'alert("USER SUCCESSFULLY DELETED!")';
        echo '</script>';
    }
}
