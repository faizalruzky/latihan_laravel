<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
          'title', 'content', 'author', 'foto', 
        ]; //
         public static function valid($id='') {
      	 return array(
        'title' => 'required|min:5|unique:articles,title'.($id ? ",$id" : ''),
        'content' => 'required|min:10|unique:articles,content'.($id ? ",$id" : ''),
        'author' => 'required',
        'foto' => 'mimes:jpeg,bmp,png|max:500'
      );
    }
}
