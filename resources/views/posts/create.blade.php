<!DOCTYPE html>
<html lang="en">
    <head>
        Create New Post
    </head>
    
    <body>
        
   <div class="row">
    <div class="col-md-8 col-md-offset-2">     
        <h1>Create New Post</h1>
        <hr>
        
       
        <form action="/posts" method="post">

  <input type="text" name="Title:" value=null>
  <br>
  <input type="text" name="Content" value=null>
  <br><br>
  <input type="submit" value="Submit">
            
        </form>
                
</div>
</div>
    </body>
</html>   

<!--@extends('main')
@section('title', '|Create New Post')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">     
        <h1>Create New Post</h1>
        <hr>
{!! Form::open(['route' => 'posts.store']) !!}
    {{Form::label('title', 'Title:')}}
    {{Form::text('title', null, ['class' => 'form-control'])}}

    {{Form::label('body', 'Content:')}}
    {{Form::textarea('body', null, ['class' => 'form-control'])}}
    {{Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block'])}}
{!! Form::close() !!}
</div>
</div>
@endsection-->


