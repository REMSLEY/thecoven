<?php // use Session;
?>
@extends('main')
@section('pageTitle', '| View Post')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2>{{$post->title}}</h2>
            
            <img src="{{asset('/images/'. $post->image)}}"
                 height="400" width="700"/>
            
            <p class="post">{{$post->body}}</p>
        </div>
        
        <div class="col-md-4">
           
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created on:</dt>
                    <dd>{{ date('l jS F Y, g:ia', strtotime($post->created_at)) }}</dd>
                </dl>
                
                <dl class="dl-horizontal">
                    <dt>Last updated:</dt>
                    <dd>{{ date('l jS F Y, g:ia', strtotime($post->updated_at)) }}</dd>
                </dl>
                
                <dl class="dl-horizontal">
                    <dt>URL slug:</dt>
                    <dd><a href="{{ route('posts.publicsingle', $post->slug) }} " style="word-wrap: break-word">{{ route('posts.publicsingle', $post->slug) }}</a></dd>
                </dl>

                <hr>

                <div class="row">
                    <div class="col-sm-6">
<!--                        <form action="{{route('posts.edit', $post->id)}}" method="get">
                            <input type="submit" value="Edit Post" class="btn btn-block btn-primary">
                        </form>-->
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-block btn-primary">Edit Post</a> 
                    </div>
                    <div class="col-sm-6">

                        <form action="{{route('posts.destroy', $post->id)}}" method="post">
                            <input name="_method" type="hidden" value="DELETE">
    <!--                    <a href="{{ redirect()->route('posts.destroy', $post->id) }}" class="btn btn-block btn-danger">Delete Post</a>-->
                        <input type="submit" value="Delete" class="btn btn-block btn-danger">
                       
                       {{ csrf_field() }}
                        </form>
                    </div>
                    </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                        <form action="{{route('posts.index')}}" method="get" method="hidden">
                              <input type="submit" value="View All Posts" class="btn btn-default btn-block">
                      
                        </form>
                            </div>
                </div>
            </div>
            
        </div>
        
    </div> 
<div class="row">
    <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
            {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

                    <div class="row">
                            <div class="col-md-12">
                                <?php 
                                $id = Auth::user()->id;
                                $currentuser = User::find($id);
                                ?>
                                    {{ Form::hidden('user_id', "$currentuser->id") }}
                            </div>

                            <div class="col-md-12">
                                    {{ Form::label('comment', "Comment:") }}
                                    {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

                                    {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                            </div>
                    </div>

			{{ Form::close() }}
    </div>
</div>
    
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comment()->count() }} Comments</h3>
        @foreach($post->comment as $comment)
            <div class="comment">
                <div class="author-info">
                    <!--<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">-->
                    <div class="author-name">
                            <?php
                            $currentuser = User::find($comment->user_id);
                            ?>
                            <h4>{{ $currentuser->name }}</h4>
                            <p class="author-time">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
                    </div>
                </div>

                <div class="comment-content">
                        {{ $comment->comment }}
                </div>

            </div>
        @endforeach
    </div>
</div>

@endsection
