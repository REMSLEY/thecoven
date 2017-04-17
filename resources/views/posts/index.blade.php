@extends ('main')

@section ('pageTitle', '| All Posts')

@section ('content')
<div class="row">
    
    <div class="col-md-10">
        <h1 align="center">All Posts</h1>
    </div>
    
    <div class="col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Post</a>
    </div>
    
    <div class="col-lg-12">
        <hr>
    </div>
    
</div>
    
    <div class='row'>
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <th>Post</th>
                    <th>Date created</th>
                    <th></th>
                </thead>
                
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            
                            <td class="post"><h5 class="header">{{ $post->title }}</h5><br>{{ substr($post->body, 0, 100) }}{{ strlen($post->body) > 100 ? '...' : '' }}</td>
                            <td>{{ date('l jS F Y, g:ia', strtotime($post->created_at)) }}</td>
                            <td><a href='{{ route('posts.show', $post->id) }}' class='btn btn-default btn-sm'>View</a><a href='{{ route('posts.edit', $post->id) }}' class='btn btn-default btn-sm'>Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!!$posts->Links();!!}
            </div> 
         
        </div>
    </div>
    
@endsection