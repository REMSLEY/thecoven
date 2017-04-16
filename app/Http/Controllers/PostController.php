<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Validation;
use App\Post;
use Session;
use Auth;
use Image;

class PostController extends Controller
{
    //use ValidatesRequests;
    //use AuthorizesRequests, DispatchesJob;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $posts = Post::all();
//        return view('pages.welcome', ['posts' => $posts]);
//    }
 
    // to display posts for a signed in user.
    public function index ()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        if (Auth::check()){
        return view('posts.index')->withPosts($posts);

    }
        else {
        return view('posts\public.publicindex')->withPosts($posts);
    }
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
                                   'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                                   'body' => 'required'                    
            ]);
        
       //store the data
        $post = new Post;
        
        $post->title = $request->title; // Slightly different syntax in the update function below - why?
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->user_id = 1;
        $post->end_date = null;
        $post->update_id = null;
        
        //save image to post
        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images\\'.$filename);
            Image::make($image)->resize(700,400)->save($location);
            
            $post->image=$filename;
        }
        
        $post->save();
        
        Session::flash('success', 'Thank you for your contribution :)');
                
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
        if (Auth::check()){
        return view('posts.view', ['post'=>$post]);
    }
        else {
            return view('posts\public.publicsingle', ['post'=>$post]);
        }
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
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
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
        $post = Post::find($id);
        if($request->input('slug') == $post->slug) {
            $this->validate($request, ['title'=> 'required|max:255',
                                   'body' => 'required'   
            ]);
        } else {
            $this->validate($request, ['slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                                   'title'=> 'required|max:255',
                                   'body' => 'required' 
            ]);
        }
        
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->user_id = 1;
        $post->end_date = null;
        $post->update_id = null; // Same as user_id?
        
        $post->save();
        
        Session::flash('success', 'Success! Your changes have been saved.');
        
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
       $post = Post::find($id);
       $post->delete();
       
       Session::flash('success', 'Your post has been deleted');
       
       return redirect()->route('posts.index');
    }
//public function displayPosts (){
//$posts = Post::all();
////dd($posts);//laravel version of vardump
//}
    
    public function getIndex(){
            $topPosts = Post::orderBy('created_at','desc')->limit(4)->get();
            return view('pages.welcome', ['topPosts'=>$topPosts]);
}

    public function getPublicSingle($slug){
        $post = Post::where('slug', '=', $slug)->first();
        return view('posts.publicsingle')->withPost($post);
    }

}