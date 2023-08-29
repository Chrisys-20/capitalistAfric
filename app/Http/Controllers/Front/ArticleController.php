<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //
    public function index($categorie,$ref){

            $monArticle = DB::table('articles')
            ->where('ref',$ref)
            ->get();

            $allArticle = DB::table('articles')
            ->where('categorie',$categorie)
            ->get();
    
    
        return view('front.articles.article_details',['monArticle'=>$monArticle,'allArticle'=>$allArticle]);
    }

   
}
