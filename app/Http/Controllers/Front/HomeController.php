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

        $categoriesOff=DB::table('articles')
        ->where('status','activé')
        ->get();

        $lastPublication=DB::table('articles')
        ->where('status','activé')
        ->limit(10)
        ->get();
       //dd( $categoriesOff);

        $publication=DB::table('articles')
        ->where('status','activé')
        ->limit(10)
        ->get();

       //dd($categoriesOff);
        return view('front.home',['categories'=>$categories,'categOff'=>$categoriesOff,'lastPublication'=>$lastPublication,'publication'=>$publication]);
    }

    public function newsLetter(Request $request){

        $categories=DB::table('newsletter')
        ->insert([
            'email'=>$request->email
        ]);

        return back();
    }





}
