<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=> 'required|max:250',
            'content'=>'required'
        ]);
        $postData = $request->all();
        $newPost = new Post();
        $newPost->fill($postData);
        $slug = Str::slug($newPost->title);
        $alternativeSlug = $slug;
        $postFound = Post::where('slug',$slug)->first();
        $count = 1;
        while($postFound){
            $altSlug = $slug.'_'.$counter;
            $count++;
            $postFound = Post::where('slug',$altSlug)->first();
        }
        $newPost->slug = $alternativeSlug;
        $newPost->save();
        return redirect()->route('admin.posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('admin.posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('admin.posts.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        // simil store
        $postData = $request->all();
        $slug = Str::slug($newPost->title);
        $alternativeSlug = $slug;
        $postFound = Post::where('slug',$slug)->first();
        $count = 1;
        while($postFound){
            $altSlug = $slug.'_'.$counter;
            $count++;
            $postFound = Post::where('slug',$altSlug)->first();
        }
        $post->slug = $alternativeSlug;
        $post->update($posts);
        return redirect()->route('admin.posts.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return reedirect()->route('admin.posts.index');
    }
}
