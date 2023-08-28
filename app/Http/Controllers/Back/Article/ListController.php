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


    public function active($ref){

        $rounds = DB::table('articles')
        ->where('ref', $ref)
        ->update(['status' => 'activé']);

        return back();
    }

    public function desactive($ref){

        $rounds = DB::table('articles')
        ->where('ref', $ref)
        ->update(['status' => 'déactivé']);

        return back();
    }

    public function priority($ref){

        $rounds = DB::table('articles')
        ->where('ref', $ref)
        ->update(['priority' => 'principale']);

        return back();
    }


    
}
