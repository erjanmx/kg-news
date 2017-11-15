<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function top()
    {
        $articles = Article::where('is_active', 1)->whereRaw('DATE(created_at) = CURDATE()');

        $articles = $articles->orderBy('facebook_shared', 'desc')->orderBy('created_at', 'desc')->take(50)->get();

        $result = [];
        foreach ($articles as $article) {
            $result[] = [
//                'url' => url() . '/cl/' . $article->in_url,
                'url' => $article->url,
                'title' => $article->title,
                'source' => $article->source->name,
                'timestamp' => strtotime($article->created_at),
                'description' => $article->description,
            ];
        }
        return $result;
    }


    public function index(Request $request)
    {
        $q = $request->get('q', '');
        $lt = $request->get('lt');

        $articles = Article::where('is_active', 1);

		if ($q) {
            $articles = $articles->where('title', 'like', '%' . $q . '%');
        }
        if ($lt) {
            $last = Article::where('created_at', date('Y-m-d H:i:s', $lt))->first();
            $articles = $articles->where('id', '<', $last->id);
        }

        $articles = $articles->orderBy('created_at', 'desc')->take(50)->get();

        $result = [];
        foreach ($articles as $article) {
            $result[] = [
                'url' => $article->url,
//                'url' => url() . '/cl/' . $article->in_url,
                'title' => $article->title,
                'source' => $article->source->name,
                'timestamp' => strtotime($article->created_at),
                'description' => $article->description,
            ];
        }
	    usleep(500);
        return $result;
    }

    public function getCountNew(Request $request, $timestamp)
    {
        if ($timestamp == 0) {
            return 0;
        }
        $q = $request->get('q', '');

        $articles = Article::where('is_active', 1);

        if ($q) {
            $articles = $articles->where('title', 'like', '%' . $q . '%');
        }

        return $articles->where('created_at', '>', date('Y-m-d H:i:s', $timestamp))->count();
    }

    public function click($url) {
        $article = Article::where('in_url', $url)->firstOrFail();
        $article->clicked += 1;
        $article->save();

        return redirect($article->url);
    }
}
