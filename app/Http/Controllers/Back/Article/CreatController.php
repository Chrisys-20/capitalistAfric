<?php

namespace App\Http\Controllers\Back\Article;

use App\Http\Controllers\Controller;
use App\Fonction\Fonction;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreatController extends Controller
{
    //
    public function index(){

        return view('back.articles.create');
    }

    public function store(Request $request){

        $incomingFields=$request->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie'=>['required','min:2','max:10'],
            'title'=>['required','min:4','max:500'],
            'paragraphe1'=>['required','min:4','max:2000'],
            'paragraphe2'=>['required','min:4','max:2000'],
            'paragraphe3'=>['required','min:4','max:2000'],
        ]);

        // die(var_dump($request->all()));
        //dd($request->all());

        do {
            $ref='Article_'.(new  Fonction())->genUniqueID('22');
            $find_ref=DB::select('select * from articles where ref="'.$ref.'"');
        }while (!empty($find_ref));

        $image_path = "images/article/image_".$ref.'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path(),'images/article',$image_path);
        
        //die(var_dump('yes'));

        $my_article = new Article;

        $my_article->user_id = Auth::user()->id;
        $my_article->ref = $ref;
        $my_article->title = $request->title;
        $my_article->categorie = $request->categorie;
        $my_article->image = $image_path;
        $my_article->blockote = $request->blockote;
        $my_article->paragraphe1 = $request->paragraphe1;
        $my_article->paragraphe2 = $request->paragraphe2;
        $my_article->paragraphe3 = $request->paragraphe3;
        $my_article->paragraphe4 = $request->paragraphe4;
        $my_article->paragraphe5 = $request->paragraphe5;
        $my_article->paragraphe6 = $request->paragraphe6;
        $my_article->paragraphe7 = $request->paragraphe7;
        $my_article->paragraphe8 = $request->paragraphe8;
        $my_article->paragraphe9 = $request->paragraphe9;
        $my_article->paragraphe10 = $request->paragraphe10;

        $my_article->save();

        // $my_article['user_id'] = strip_tags(Auth::user()->id);
        // $my_article['title'] = strip_tags($request->title);
        // $my_article['categorie'] = strip_tags($request->categorie);
        // $my_article['image'] = strip_tags($image_path);
        // $my_article['paragraphe1'] = strip_tags($request->paragraphe1);
        // $my_article['paragraphe2'] = strip_tags($request->paragraphe2);
        // $my_article['paragraphe3'] = strip_tags($request->paragraphe3);

        //dd($my_article);

        // Article::create($my_article);

        // $ad_user=DB::table('users')
        // ->where('role','admin')
        // ->selectRaw('users.ref,users.name,users.email,users.phone,users.role')
        // ->get();

        

        // DB::table('article')
        // ->insert([
        //     "id"=> Auth::user()->id,
        //     "title"=>$request->title,
        //     "question"=>$request->description,
        //     "link_image"=>$image_path,
        //     "content"=>$request->content,
        //     "read_time"=>$request->min_lecture,
        //     "ref"=>$ref

        // ]);

        // return back()->withSucess('Article crée!!');
        // return view('dashboard.articles.create',['ad_user'=>$ad_user]);
        return back()->with(['message'=>'Article crée avec success']);
    }

}
