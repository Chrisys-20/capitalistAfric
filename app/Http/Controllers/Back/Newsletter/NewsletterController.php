<?php

namespace App\Http\Controllers\Back\Newsletter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    //
    public function index(){

        $allEmail=DB::table('newsletters')
        ->get();

        return view('back.newsletter.news',['allEmail'=>$allEmail]);
    }
   
}
