<?php

namespace App\Http\Controllers\Back\Article;

use App\Http\Controllers\Controller;
use App\Fonction\Fonction;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CreatController extends Controller
{
    //
    public function index(){

        return view('back.articles.create');
    }

    public function insert(Request $request){

        $incomingFields=$request->validate([

            'image' => ['required','image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
            'category'=>['required','min:4','max:10'],
            'title'=>['required','min:4','max:100'],
            'description'=>['required','min:4','max:500'],

        ]);

        do {
            $ref='Article_'.(new  Fonction())->genUniqueID('22');
            $find_ref=DB::select('select * from article where ref="'.$ref.'"');
        }while (!empty($find_ref));

        $image_path = "images/article/image_".$ref.'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path() . '/images/article' ,$image_path);

        

        $ad_user=DB::table('users')
        ->where('role','admin')
        ->selectRaw('users.ref,users.name,users.email,users.phone,users.role')
        ->get();

        

        DB::table('article')
        ->insert([
            "id"=> Auth::user()->id,
            "title"=>$request->title,
            "question"=>$request->question,
            "link_image"=>$image_path,
            "content"=>$request->content,
            "read_time"=>$request->min_lecture,
            "ref"=>$ref

        ]);

        // return back();
        return view('dashboard.articles.create',['ad_user'=>$ad_user]);
    }

}
