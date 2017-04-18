@extends('main')

@section('pageTitle', '|View User')

@section('content')
@if(Auth::check())


        <script> 
            
            alert ("This is your account information. Sorry it's not more interesting ;)");
      
        </script>

<div class="row">
    <div class="col-md-12">
        <ul>
            <li><h3>Username: {{Auth::user()->name}}</h3></li>
            <li><h3>Email: {{Auth::user()->email}}</h3></li>
            <li><h3>Joined: {{Auth::user()->created_at}}</h3></li>
        </ul>
    </div>
</div>
@endif

@endsection