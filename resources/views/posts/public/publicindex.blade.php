@extends ('main')

@section ('pageTitle', '| All Posts')

@section ('content')
<div class='row'>
    <div class='col-md-10'>
        <h1>All Posts</h1>
    </div>
    <div class='col-md-2'>
    </div>
    <div class='col-lg-12'>
        <hr>
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
                            <td><a href='{{ route('posts.show', $post->id) }}' class='btn btn-default btn-sm'>View</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!!$posts->Links();!!}
            </div> 
         
        </div>
    </div>
    
    
</div>
@endsection