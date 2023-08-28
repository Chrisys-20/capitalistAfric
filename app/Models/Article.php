<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;



    protected $fillable=['user_id','ref','title','categorie','image','paragraphe1','paragraphe2','paragraphe3'];


}
