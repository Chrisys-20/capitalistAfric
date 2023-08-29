<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){

        $categories=DB::table('articles')
        ->where('status','activé')
        ->get();

        $lastPublication=DB::table('articles')
        ->where('status','activé')
        ->limit(10)
        ->get();

        $publication=DB::table('articles')
        ->where('status','activé')
        ->limit(10)
        ->get();

        return view('front.home',['categories'=>$categories,'lastPublication'=>$lastPublication,'publication'=>$publication]);
    }
}
