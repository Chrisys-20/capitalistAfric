<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashbController extends Controller
{
    //

    //
    public function index()
    {

       
        $articleList = DB::table('articles')
            ->get();

        $principaleArticle = DB::table('articles')
            ->where('priority', "principale")
            ->get();


        return view('back.dashb', ['articleList' => $articleList, 'principaleArticle' => $principaleArticle]);
    }
}
