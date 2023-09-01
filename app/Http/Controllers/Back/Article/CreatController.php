<?php

namespace App\Http\Controllers\Back\Article;

use App\Http\Controllers\Controller;
use App\Fonction\Fonction;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
Use Alert;


class CreatController extends Controller
{
    //
    public function index(){

        return view('back.articles.create');
    }

    public function store(Request $request){
        // dd($request->all());

        $incomingFields=$request->validate([

            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'image' => ['required', File::image()->smallerThan(1024)],
            'categorie'=>['required','min:2','max:10'],
            'title'=>['required','max:500'],
            'paragraphe1'=>['required'],
            'paragraphe2'=>['required'],
        ]);

        // die(var_dump($request->all()));
        //dd($request->all());

        do {
            $ref='Article_'.(new  Fonction())->genUniqueID('22');
            $find_ref=DB::select('select * from articles where ref="'.$ref.'"');
        }while (!empty($find_ref));

        $image_path = "public/images/article/".$ref.'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/article'),$image_path);
        
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

       // dd($my_article);

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
       
        // return back()->with(['success'=>'Article crée avec success']);
        return back()->with('message','Article crée avec success');
    }

    public function edit($ref){

        $article= DB::table('articles')
        ->where('ref', $ref)
        ->get();
       // dd( $article);
        return view('back.articles.edit',['article'=>$article]);
    }

    public function update($refarticle, Request $request){
        
        $incomingFields=$request->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'categorie'=>['required','min:2','max:10'],
            'title'=>['required','max:500'],
            'paragraphe1'=>['required'],
            'paragraphe2'=>['required'],
            'paragraphe3'=>['required'],
        ]);
        

        // die(var_dump($request->all()));
        //dd($request->all());
  
        do {
            $ref='Article_'.(new  Fonction())->genUniqueID('22');
            $find_ref=DB::select('select * from articles where ref="'.$ref.'"');
        }while (!empty($find_ref));

        $image_path = "public/images/article/".$ref.'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/article'),$image_path);
        
       // dd($refarticle);


        DB::table('articles')
        ->where('ref', $refarticle)
        ->update([
            'title'=>$request->title,
            'categorie'=>$request->categorie,
            'image'=>$image_path,
            'blockote'=>$request->blockote,
            'paragraphe1'=> $request->paragraphe1,
            'paragraphe2'=> $request->paragraphe2,
            'paragraphe3'=> $request->paragraphe3,
            'paragraphe4'=> $request->paragraphe4,
            'paragraphe5'=> $request->paragraphe5,
            'paragraphe6'=> $request->paragraphe6,
            'paragraphe7'=> $request->paragraphe7,
            'paragraphe8'=> $request->paragraphe8,
            'paragraphe9'=> $request->paragraphe9,
            'paragraphe10'=> $request->paragraphe10,
        ]);

        // return redirect()->route('article.list')->with('message','Article crée avec success');;
        return back()->with('message','Article mis à jour avec success');;
    }

    public function delete($refarticle, Request $request){
        
        //  $title = 'Supprimer l\'article!';
        //  $text = "Voulez vous vraiment supprimer?";
        // Alert::confirmDelete($title, $text);

        DB::table('articles')
        ->where('ref', $refarticle)
        ->delete();

        return redirect()->route('article.list');
    }

}
