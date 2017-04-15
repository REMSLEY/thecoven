@extends('main')
@section('pageTitle', '| View Post')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <img src="{{asset('images/', $post->image)}}"
                 height="400" width="800"/>
            <h2>{{$post->title}}</h2>
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
                    <dd><a href="{{ route('posts.publicsingle', $post->slug) }}" style="word-wrap: break-word">{{ route('posts.publicsingle', $post->slug) }}</a></dd>
                </dl>

                <hr>
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
@endsection
