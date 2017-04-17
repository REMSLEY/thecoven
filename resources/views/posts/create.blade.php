@extends('main')

@section('pageTitle', '| Create New Post')

@section('stylesheets')

{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css') !!}

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>
    
    tinymce.init({
        
        selector: 'textarea'
        
    });
    
</script>

@endsection

@section('content')

<!--<link href="public/css/select2.min.css" rel="stylesheet" />
<script src="public/js/select2.min.js"></script>
-->


    <div class="row">
        <div class="col-md-8 col-md-offset-2">     
            <h1 align="center">Create New Post</h1>
            <hr>

            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
              {{ Form::label('title', 'Title:') }}
              {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}
              
              {{ Form::label('slug', 'URL:') }}  
              {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }} 
              
              {{ Form::label('tags', 'Tags:')}}
<!--              <select class="form-control select2-multi" name="tags" multiple="multiple">
                  @foreach ($tags as $tag)
                  <option value="{{$tag->id}}">{{$tag->name}}</option>
                  @endforeach
              </select>-->
              {{ Form::label('body', "Content:") }} 
              {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '2500')) }}
              
              {{ Form::submit('Create Post', array('class' => 'btn btn-sucess btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            
            {!! Form::close() !!}}
            
       <!--   
       
       PREVIOUS CODE
       
              <form action="/posts" method="post" enctype="multipart/form-data">
                <label for='title'>Title:</label>
                <input class="form-control" type="text" name="title" id="title" maxlength="255">
                <br>
                <label for='slug'>URL:</label> NEED THIS?
                <input class="form-control" type="text" name="slug" id="slug" minlength="5" maxlength="255">
                <br>
                <label for='body'>Content:</label>
                <textarea class="form-control" name="body" rows='15' id="body" ></textarea>
              <br>
       
                <input class="btn-block btn btn-success btn-lg" type="submit" value="Submit">
                {{ csrf_field() }} 
       -->
                
            {{Form::label('featured_image','Upload Featured Image:')}}
            {{Form::file('featured_image')}}
            </form>   

        </div>
    </div>

   
@endsection

@section('scripts')

   {!! Html::script('js/parsley.min.js') !!}
   {!! Html::script('js/select2.min.js') !!}
   
   
   <script type="text/javascript">
       $('.select2-multi').select2();
       </script>
       
    
}

@endsection   