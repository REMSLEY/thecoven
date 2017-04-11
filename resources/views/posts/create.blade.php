@extends('main')

@section('pageTitle', '| Create New Post')

@section('content')
   <div class="row">
    <div class="col-md-8 col-md-offset-2">     
        <h1>Create New Post</h1>
       
        <form action="/posts" method="post">
            <label for='title'>Title:</label>
            <input class="form-control" type="text" name="title" id="title">
  <br>
  <label for='body'>Content:</label>
  <textarea class="form-control" name="body" rows='15' id="body" ></textarea>
  <br>
  <input class="btn-block btn btn-success btn-lg" type="submit" value="Submit">
         {{ csrf_field() }}
           
        </form>
                
</div>
</div>
   
@endsection
