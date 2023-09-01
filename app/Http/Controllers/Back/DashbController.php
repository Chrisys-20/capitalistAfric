<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

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
        $principaleArticlenb = DB::table('articles')
            ->where('priority', "principale")
            ->get()->count();

        $articleListByGroupFi = DB::table('articles')
            ->where('status', "activé")
            ->where('categorie', "fi")
            ->select('categorie')
            ->get()->count();

        $articleListByGroupBo = DB::table('articles')
            ->where('status', "activé")
            ->where('categorie', "bo")
            ->select('categorie')
            ->get()->count();
        $articleListByGroupAn = DB::table('articles')
            ->where('status', "activé")
            ->where('categorie', "an")
            ->select('categorie')
            ->get()->count();
        $articleListByGroupPo = DB::table('articles')
            ->where('status', "activé")
            ->where('categorie', "po")
            ->select('categorie')
            ->get()->count();
        $articleListByGroupId = DB::table('articles')
            ->where('status', "activé")
            ->where('categorie', "id")
            ->select('categorie')
            ->get()->count();

        return view('back.dashb', ['articleList' => $articleList, 'principaleArticle' => $principaleArticle, 'articleListByGroupId' => $articleListByGroupId, 'articleListByGroupFi' => $articleListByGroupFi, 'articleListByGroupAn' => $articleListByGroupAn, 'articleListByGroupBo' => $articleListByGroupBo, 'articleListByGroupPo' => $articleListByGroupPo,'principaleArticlenb'=> $principaleArticlenb]);
    }
}
