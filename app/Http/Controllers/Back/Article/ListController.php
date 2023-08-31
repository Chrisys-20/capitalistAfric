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
        $totalearticle=DB::table('articles')
        ->get()->count();

        //dd($totalearticle);

        return view('back.articles.list',['articleList'=>$articleList,'totalearticle'=>$totalearticle]);
    }


    public function active($ref){

        DB::table('articles')
        ->where('ref', $ref)
        ->update(['status' => 'activé']);

        return back();
    }

    public function desactive($ref){

        DB::table('articles')
        ->where('ref', $ref)
        ->update(['status' => 'déactivé']);

        return back();
    }

    public function priority($ref){
        
         DB::table('articles')
        ->where('ref', $ref)
        ->update(['priority' => 'principale']);

        return back();
    }
    
}
