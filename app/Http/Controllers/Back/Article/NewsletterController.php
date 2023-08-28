<?php

namespace App\Http\Controllers\Back\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //
    public function index(){

        return view('back.newsletter.news');
    }
}
