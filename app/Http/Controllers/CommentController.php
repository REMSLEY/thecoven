<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comment;
use App\Post;
use Session;
use App\User;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'store']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
        $this->validate($request, array(
            'comment'   =>  'required|min:5|max:2000'
            ));
        
        $post = Post::find($post_id);
        $userid = $request->user_id;
        $user = User::find($userid);
        $comment = new Comment();
        
        $comment->comment_body = $request->comment;
//        $comment->user_id = $userid;
//        $comment->post_id = $post_id;
//        $comment->approved = true;
        
        $comment->post()->associate($post);
        $comment->user()->associate($user);
        $comment->save();
        
        Session::flash('success', 'Comment was added. Well done you!');
        return redirect()->route('posts.show',['id'=>$post_id]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('comments.edit')->withComment($comment);
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
        $comment = Comment::find($id);
        $this->validate($request, array('comment' => 'required'));
        $comment->comment = $request->comment;
        $comment->save();
        Session::flash('success', 'Comment updated');
        return redirect()->route('posts.show', $comment->post->id);
    }
    public function delete($id)
    {
        $comment = Comment::find($id);
        return view('comments.delete')->withComment($comment);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $post_id = $comment->post->id;
        $comment->delete();
        Session::flash('success', 'Deleted Comment');
        return redirect()->route('posts.show', $post_id);
    }
}