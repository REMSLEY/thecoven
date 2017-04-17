@extends('main')
@section('pageTitle', '| Welcome')
@section('content')
        
    <div class="row">
        <div class="col-md-12">
           <div class="jumbotron">
             <div style="background-color:rgb(0,0,0);background-image:url(http://www.zingerbugimages.com/backgrounds/yellow_mini_flowers.gif);background-position:top left;background-repeat:repeat;background-attachment:fixed;}" class= "jumbotron">
           <h1>Welcome to the Yellow Rose</h1>
           <p class="lead">A space to post stuff. We can edit this part to briefly describe/ introduce the site - click to see popular post? Get logo in here?</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Latest Post</a></p>
             </div> 
           </div>
        </div>
    </div> <!-- end of header .row (the header element)-->
    
    
    Want to show the featured post here.
    

    <!-- SHOWS MULTIPLE POSTS AND A SIDEBAR THAT IS NOT WORKING -->
<div class="row">
   <div class="col-md-8">
     
  @foreach($topPosts as $post)
   <div class="post">
       <h3>{{$post->title}}</h3>
       <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? '...' : '' }}</p>
       <a href='{{ url('blog/'.$post->slug) }}' class='btn btn primary'> Read More </a>
   
   </div>
@endforeach
</div>
    
<hr>


        <div class="col-md-3-offset-1">
<!--            <h2>SIDE BAR</h2>  -->
            <a class="twitter-timeline" data-width="370" data-height="500" href="https://twitter.com/EverydaySexism"></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
</div>

   @endsection