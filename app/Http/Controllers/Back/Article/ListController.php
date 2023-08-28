<?php

namespace App\Http\Controllers\Back\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    //
    public function index(){

        $articleList=DB::table('articles')
        ->get();

        
        
        return view('back.articles.list',['articleList'=>$articleList]);
    }

    
}
