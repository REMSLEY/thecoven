@extends('main')

@section('pageTitle', '| Edit Post')

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
<form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control input-lg" id="title" name="title" rows="1" style="resize:none;" value='{{ $post->title }}'>
                </div>
                
                <label for='slug'>URL:</label>
                <input class="form-control" type="text" name="slug" id="slug" minlength="5" maxlength="255" value="{{$post->slug}}">
                <br>
                
                <label for="featured_image">Update Image:</label>
                <input class="form-control" type="image" name="featured_image" id="featured_image">
                <br>
                
                <div class="form-group">
                    <label for="body">Content:</label>
                    <textarea type="text" class="form-control input-lg" id="body" name="body" rows="10">{{ $post->body }}</textarea>
                </div> 
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
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-block">Cancel</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-block btn-danger">Delete Post</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <br><button type="submit" class="btn btn-success btn-block">Save Changes</button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            {{ method_field('PUT')}} 
<!--                            If this causes an error, try changing the method attribute in the original form tag to PUT -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{!! Html::script('js/select2.min.js') !!}
@endsection
