@extends('main')
@section('pageTitle', '| Links')
@section('content')

<head>
    
    <title>Links</title>
    
</head>
      
<body>
    
    <h1 align="center"> Links </h1>
        
        <h2 align="center"> Links to places we love and rate <3 </h2>
        
  <!-- THUMBNAILS -->
        
 <div class="row">
     
     <!-- First Thumbnail - White rose campaign thumbnail -->
     
  <div class="col-sm-6 col-md-4">  
    <div class="thumbnail">  
      <img src="/images/whiteribbonoriginal.png" alt="White Ribbon Campaign">
      <div class="caption">
        <h3>White Ribbon</h3>
        <p>blah blah</p>
        <p><a href="http://www.whiteribboncampaign.co.uk/" class="btn btn-default" style="background-color: yellow;" role="button">Go to Website</a></p>
      </div>
    </div>
  </div>  
     
     <!-- Second thumbnail - Ladies of Code -->
      
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
      <img src="/images/ladiesofcode2.jpeg" alt="Ladies of Code">
      <div class="caption">
        <h3>Ladies of Code</h3>
        <p>blah blah</p>
        <p><a href="https://www.meetup.com/Ladies-of-Code-Leeds/" class="btn btn-primary" style="background-color:#ff0099;" role="button">Go to Meetup Page</a></p>
      </div>
     </div>  
  </div>
     
     <!-- Third thumbnail - Get into Tech -->
     
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
      <img src="/images/skylogo.jpg" alt="Sky">
      <div class="caption">
        <h3>Sky - Get into Tech</h3>
        <p>blah blah</p>
        <p><a href="http://getintotech.sky.com/" class="btn btn-primary" style="background-color:orange;" role="button">Go to Website</a> <a href="#" class="btn btn-default" style="background-color:greenyellow;" role="button">Read More</a></p>
      </div>
     </div>  
  </div>   
     
</div>
  
  <!-- Second Row Thumbnails -->
  
 <div class="row">
     
     <!-- First thumbnail - Women's aid -->
     
  <div class="col-sm-6 col-md-4">  
    <div class="thumbnail">  
      <img src="/images/womensaid.png" alt="Women's Aid">
      <div class="caption">
        <h3>Women's Aid Leeds</h3>
        <p>blah blah</p>
        <p><a href="http://www.leedswomensaid.co.uk/" class="btn btn-primary" style="background-color:purple;" role="button">Go to Website</a></p>
      </div>
    </div>
  </div>  
     
     <!-- Second thumbnail - Leeds Feminist Network -->
      
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
      <img src="/images/leedsfeministnetwork.jpg" alt="Leeds Feminist Network">
      <div class="caption">
        <h3>Leeds Feminist Network</h3>
        <p>blah blah</p>
        <p><a href="https://www.facebook.com/pg/LSFN-Leeds-Feminist-Network-229437240469458/about/" class="btn btn-primary" style="background-color:blue;" role="button">Go to Facebook Page</a></p>
      </div>
     </div>  
  </div>
     
     <!-- Third thumbnail - Code First Girls -->
     
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
      <img src="/images/codefirstgirls.png" alt="Code First Girls">
      <div class="caption">
        <h3>Code First Girls</h3>
        <p>blah blah</p>
        <p><a href="http://www.codefirstgirls.org.uk/cfg-northern-conference-2017.html" class="btn btn-primary" style="background-color:red;" role="button">Go to Website</a></p>
      </div>
     </div>  
  </div>   
     
 </div>
        

</body>  

</html>

@endsection