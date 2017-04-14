
<?php use app\Post; ?>
<div class='row'>
    <div class='col-md-10'>
        <h1>All Posts</h1>
    </div>
    <div class='col-md-2'>
        <a href='{{ route('posts.create') }}' class='btn btn-lg btn-block btn-primary'>Create New Post</a>
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
                    {{ $posts = Post::all()}}
                    @foreach($posts as $post)
                        <tr>
                            <th><h1>{{ $post->title }}</h1></th>
                            <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? '...' : '' }}</td>
                            <td>{{ date('l jS F Y, g:ia', strtotime($post->created_at)) }}</td>
                            <td><a href='{{ route('posts.show', $post->id) }}' class='btn btn-default btn-sm'>View</a><a href='{{ route('posts.edit', $post->id) }}' class='btn btn-default btn-sm'>Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    
</div>