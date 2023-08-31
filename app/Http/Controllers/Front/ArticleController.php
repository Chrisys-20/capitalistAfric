<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class ArticleController extends Controller
{
    public function get_client_ip()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }



    //
    public function index($categorie, $ref)
    {

        $attributs = DB::table('articles')
            ->where('ref', $ref)
            ->select('id')
            ->get();

        DB::table('views')
            ->insert([
                'id_articles' => $attributs[0]->id,
                'ipadresse' => get_client_ip(),
            ]);

        //  dd($attributs[0]->id);

        $totalvue = DB::table('views')
            ->join('articles', 'views.id_articles', '=', 'articles.id',)
            ->select('ipadresse')
            ->where('ref', $ref)
            ->get()->count();
        // dd( $totalvue);

        DB::table('articles')
            ->where('ref', $ref)
            ->update([
                'view' => $totalvue,
            ]);
        //  dd($totalvue);
        // $numberview = DB::table('articles')->get()->count();

        $monArticle = DB::table('articles')
            ->where('ref', $ref)
            ->get();

        $allArticle = DB::table('articles')
            ->where('categorie', $categorie)
            ->where('status', 'activé')
            ->get();

        $ArticleDesac = DB::table('articles')
            ->where('categorie', $categorie)
            ->where('status', 'desactivé')
            ->get();


        $categoriesOff = DB::table('articles')
            ->where('status', 'activé')
            ->get();


        return view('front.articles.article_details', ['monArticle' => $monArticle, 'allArticle' => $allArticle, 'ArticleDesac' => $ArticleDesac, 'categOff' => $categoriesOff, 'totalvue' => $totalvue]);
    }
}
