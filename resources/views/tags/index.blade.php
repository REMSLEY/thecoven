@extends ('main')

@section ('pageTitle', '| All Posts')

@section ('content')
<div class="row">
    
    <div class="col-md-8">
        <h1 align="center">Tags</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Tag Name</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <th>{{$tag->id}}</th>
                            <td>{{$tag->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div> 
    <div class="col-md-3">
        <div class="well">
            {!! Form::open(['route'=>'tags.store', 'method'=>'POST'])!!}
            <h2>New Tag</h2>
            {{Form::label('name','Name:')}}
            {{Form::text('name', null, ['class'=>'form-control'])}}
            <br>
            {{Form::submit('Create New Tag', ['class'=>'btn btn-primary btn-block btn-h1-spacing'])}}
            {!! Form::close()!!}
        </div>
    </div>
    
</div>
@endsection