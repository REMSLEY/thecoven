@extends('main')

@section('pageTitle', '| Create New Post')

@section('stylesheets')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>
    
    g
    
</script>

@endsection

@section('content')



    <div class="row">
        <div class="col-md-8 col-md-offset-2">     
            <h1>Create New Post</h1>
            

            <form action="/posts" method="post" enctype="multipart/form-data">
                <label for='title'>Title:</label>
                <input class="form-control" type="text" name="title" id="title" maxlength="255">
                <br>
                <label for='slug'>URL:</label>
                <input class="form-control" type="text" name="slug" id="slug" minlength="5" maxlength="255">
                <br>
                <label for='body'>Content:</label>
                <textarea class="form-control" name="body" rows='15' id="body" ></textarea>
                <br>
                <input class="btn-block btn btn-success btn-lg" type="submit" value="Submit">
                {{ csrf_field() }} 
                
            {{Form::label('featured_image','Upload Featured Image:')}}
            {{Form::file('featured_image')}}
            </form>   

        </div>
    </div>
   
@endsection
