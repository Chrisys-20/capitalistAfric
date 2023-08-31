<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    public function index(){
        $categoriesOff=DB::table('articles')
        ->where('status','activé')
        ->get();

        return view('front.contact',['categOff'=>$categoriesOff]);
    }
}
