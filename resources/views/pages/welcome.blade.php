@extends('main')
@section('pageTitle', '| Welcome')
@section('content')
        
    <div class="row">
        <div class="col-md-12">
           <div class="jumbotron">
           <h1>Welcome to the Yellow Rose</h1>
           <p class="lead">A space to post stuff. We can edit this part to briefly describe/ introduce the site - click to see popular post? Get logo in here?</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Top Post</a></p>
</div> 
</div> <!-- end of header .row (the header element)-->

<div class="row">
   <div class="col-md-8">
       <div class="post"</div>
       <h3> Post Title </h3>
       <p> Post Intro </p>
       <a href='#' class='btn btn primary'> Read More </a>
   </div>
    
<hr>
    
   <div class="post"</div>
       <h3> Post Title </h3>
       <p> Post Intro </p>
       <a href='#' class='btn btn primary'> Read More </a>
   </div>

<hr>

    <div class="post"</div>
       <h3> Post Title </h3>
       <p> Post Intro </p>
       <a href='#' class='btn btn primary'> Read More </a>
   </div>

<hr>

    <div class="post"</div>
       <h3> Post Title </h3>
       <p> Post Intro </p>
       <a href='#' class='btn btn primary'> Read More </a>
   </div>
    
        <div class="col-md-3-offset-1">
            <h2>SIDEBAR</h2> <!-- this does not work atm -->
        </div>
   @endsection