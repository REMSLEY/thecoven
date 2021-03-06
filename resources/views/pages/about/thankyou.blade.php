@extends('main')
@section('pageTitle', '| Thank You')
@section('content')

<head>

    </head>
    
    <style>
    img {
    display: block;
    margin: 0 auto;
    position: left;
        }
   </style>
    
    <title>Thank You!</title>
  
    
    <body>
        
<h1 style="text-align: center"> Thank You! </h1>

<div class="row">     
    
     <!-- First Thumbnail - Lydia -->
     
  <div class="col-sm-6 col-md-4 fontnice">  
    <div class="thumbnail">  
      <img src="/images/lydia.jpg" alt="Picture of Lydia"/>
      <div class="caption">
        <h3>Lydia Hall</h3>
        <p>Photography</p>
      </div>
    </div>
  </div>  
     
     <!-- Second thumbnail - Laravel J -->
      
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
      <img src="/images/jcurtis.jpeg" alt="Laravel J">
      <div class="caption">
        <h3>Laravel J</h3>
        <p>Laravel youtube tutorial</p>
        <p><a href="https://twitter.com/_jacurtis?lang=en" class="btn btn-default" style="background-color:grey;" role="button"><span style="font-weight:bold">Go to twitter</span></a>
      </div>
     </div>  
  </div>
     
     <!-- Third thumbnail - Richard -->
     
   <div class="col-sm-6 col-md-4 fontnice">  
    <div class="thumbnail">  
      <img src="/images/Richard.jpg" alt="Picture of Richard"/>
      <div class="caption">
        <h3>Richard Garside</h3>
        <p>Mentoring</p>
        <p><a href="http://nogginbox.co.uk/" class="btn btn-default" style="background-color:grey;" role="button"><span style="font-weight:bold">Go to website</span></a>
      </div>
    </div>
  </div> 
</div>    
     
     <!-- Second Row -->

<div class="row">     
    
     <!-- Fourth Thumbnail - Get into Tech -->
  
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
      <img src="/images/GIT.jpg" alt="Get into Tech">
      <div class="caption">
        <h3>Sky</h3>
        <p>Get into Tech</p>
        <p><a href="http://getintotech.sky.com/" class="btn btn-default" style="background-color:grey;" role="button"><span style="font-weight:bold">Go to Website</span></a> 
      </div>
     </div>  
  </div>   
       
     
     <!-- Fifth thumbnail - Andrew -->
      
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
      <img src="/images/skybanner.png" alt="Sky">
      <div class="caption">
        <h3>Andrew Schofield</h3>
        <p>Sky Developer and Mentor</p>
      </div>
     </div>  
  </div>
     
     <!-- Sixth - Ben -->
     
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
      <img src="/images/skybanner.png" alt="Sky">
      <div class="caption">
        <h3>Ben Lucas</h3>
        <p>Sky Developer and Mentor</p>
      </div>
     </div>  
  </div>   
     
</div>
  
 
    </body>
@endsection