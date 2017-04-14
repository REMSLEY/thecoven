<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Validation;
use App\Post;
use Session;

class PostController extends Controller
{
    //use ValidatesRequests;
    //use AuthorizesRequests, DispatchesJob;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('pages.welcome')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, ['title'=> 'required|max:255',
                                   'body' => 'required'
            ]);
        
       //store the data
        $post = new Post;
        
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = 1;
        $post->end_date = null;
        $post->update_id = null;
        
        $post->save();
        
        Session::flash('success', 'Thank you for your contribution');
                
        return redirect()->route('posts.show', $post->id);
        
        //redirect to a page, e.g. display the post
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $post = Post::find($id);
        return view('posts.view', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.git pull
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           //validate the data
        $this->validate($request, ['title'=> 'required|max:255',
                                   'body' => 'required'
            ]);
        
       //store the data
//        $post = new Post;
//        
//        $post->title = $request->title;
//        $post->body = $request->body;
//        $post->user_id = 1;
//        $post->end_date = null;
//        $post->update_id = null;
        
        $post->save();
        
        return redirect()->route('posts.show', $post->id);
        
        //redirect to a page, e.g. display the post //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
//public function displayPosts (){
//$posts = Post::all();
////dd($posts);//laravel version of vardump
//}
}
