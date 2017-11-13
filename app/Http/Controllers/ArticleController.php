<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = DB::table('articles')->orderBy('updated_at')->simplePaginate(5);
//        dd($articles);
        $items = $articles->items();
        $articleInfo = [];
        foreach ($items as $key => $value) {

            array_push($articleInfo, [ 'title' => $value->title, 'aid' => $value->aid]);
        }
        $data = [
            'articleInfo' => $articleInfo,
            'next' => $articles->nextPageUrl(),
            'pre' => $articles->previousPageUrl(),
        ];
        return view('articles', ['data' => $data]);
    }

    public function article(Request $request)
    {
        $id = $request->get('id');
        $article = Article::find($id);
        $user = User::find($article->uid);
        $articleInfo = [
            'title' => $article->title,
            'content' =>$article->content,
            'user' => $user->name,
        ];
        return view('article', ['data' => $articleInfo]);
    }

    public function store(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $user = Auth::user();
        $uid = $user->id;
        $insert = [
            'title' => $title,
            'content' => $content,
            'uid' => $uid,
        ];
        $result = Article::create($insert);

        return $result;


    }

}
