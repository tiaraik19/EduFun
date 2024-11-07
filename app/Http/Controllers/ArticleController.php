<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ArticleController extends Controller
{
    // Nama public functionnya ambil dari web.php, controller
    public function getAllArticles(){
        // Bikin variable article | with akan menerima relationship
        $articles = Article::with('category', 'author')->get();
        return view('main.home', ['article'=>$articles]);
    }

    public function getPopularArticles()
    {
        $popular = Article::with('category', 'author')->paginate(3);
        return view('main.popular', ['article' => $popular]);
    }

    public function getArticleById($id)
    {
        $article = Article::with('category', 'author')->find($id);
        return view('main.articledetail', ['article' => $article]);
    }
}




