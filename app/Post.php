<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','content',' slug'];

    // public static function slugValidator($newPost){
    //     $slugPrefix = Str::slug($newPost->title);
    //     $slug = $slugPrefix;
    //     $postFound = Post::where('slug',$slug)->first();
    //     $count = 1;
    //     while($postFound){
    //         $slug = $slug.'_'.$counter;
    //         $count++;
    //         $postFound = Post::where('slug',$slug)->first();
    //     }
    //     return $slug;
    // }
}
