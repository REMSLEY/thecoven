@extends('main')
@section('pageTitle', '| View Post')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
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

            <hr>

            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.edit', 'Edit Post', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.destroy', 'Delete Post', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
