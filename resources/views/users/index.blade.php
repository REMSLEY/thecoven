@extends('main')

@section('pageTitle', '|View User')

@section('content')
@if(Auth::check())
<p>Username {{Auth::user()->name}}</p>
<p>Email {{Auth::user()->email}}</p>
<p>Joined {{Auth::user()->created_at}}</p>

@endif

@endsection