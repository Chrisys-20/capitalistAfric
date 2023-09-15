<?php

namespace App\Http\Controllers\Back\Newsletter;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    //
    public function index(){

        // $allEmail=DB::table('newsletters')
        // ->get();
        $allEmail= new Newsletter();

       $myEmails=$allEmail->paginate(10);

        return view('back.newsletter.news',['allEmail'=>$myEmails]);
    }
   
}
