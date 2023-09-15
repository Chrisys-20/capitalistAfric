<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

       $Meilleurpublication=DB::table('articles')
        ->where('status','activé')
        ->orderBy('view','desc')
        ->limit(4)
        ->get();
        

      // dd($publication);
        return view('front.home',['categories'=>$categories,'categOff'=>$categoriesOff,'lastPublication'=>$lastPublication,'publication'=>$publication,'Meilleurpublication'=>$Meilleurpublication]);
    }

    public function newsLetter(Request $request){

        $categories=DB::table('newsletters')
        ->insert([
            'email'=>$request->email
        ]);

        return back();
    }





}
