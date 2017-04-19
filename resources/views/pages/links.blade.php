@extends('main')
@section('pageTitle', '| Links')
@section('content')

<head>
    
    <title>Links</title>
    
</head>
      
<body>   
    
    <h1 align="center"> Links </h1>
        
    <h3 align="center"><i> Links to useful and worthy organisations </i></h3>
        
  <!-- THUMBNAILS -->
        
 <div class="row">
     
   <style>
             @import url(https://fonts.googleapis.com/css?family=Montserrat:500i);
             @import url(https://fonts.googleapis.com/css?family=Inconsolata);
            
                .fontnice {
                 
                font-family: 'Montserrat:500i', Montserrat:500i;
               
                       }
    </style>      
    
     <!-- First Thumbnail - White rose campaign thumbnail -->
     
  <div class="col-sm-6 col-md-4">  
    <div <div style="background-color:rgb(0,0,0);background-image:url(http://www.zingerbugimages.com/backgrounds/yellow_mini_flowers.gif);background-position:top left;background-repeat:repeat;background-attachment:fixed;}" class="thumbnail">  
      <img src="/images/whiteribbonoriginal.png" alt="White Ribbon Campaign">
      <div class="caption">
        <h3>White Ribbon</h3>
        <p style=".fontnice">Part of a global movement supporting men and boys to initiate a culture change and put a stop to violence against women.</p>
        <p><a href="http://www.whiteribboncampaign.co.uk/" class="btn btn-default" style="background-color: yellow;" role="button"><span style="font-weight:bold">Go to Website</span></a></p>
      </div>
    </div>
  </div>  
     
     <!-- Second thumbnail - Ladies of Code -->
      
  <div class="col-sm-6 col-md-4">  
      <div <div style="background-color:rgb(0,0,0);background-image:url(http://www.zingerbugimages.com/backgrounds/yellow_mini_flowers.gif);background-position:top left;background-repeat:repeat;background-attachment:fixed;}" class="thumbnail">
      <img src="/images/ladiesofcode2.jpeg" alt="Ladies of Code">
      <div class="caption">
        <h3>Ladies of Code</h3>
        <p>International community for ladies who code with a new-ish Leeds chapter. Monthly meetups, talks, code, networking. Pizza happens.</p>
        <p><a href="https://www.meetup.com/Ladies-of-Code-Leeds/" class="btn btn-default" style="background-color:#ff0099;" role="button"><span style="font-weight:bold">Go to Meetup Page</span></a></p>
      </div>
     </div>  
  </div>
     
     <!-- Third thumbnail - Get into Tech -->
     
  <div class="col-sm-6 col-md-4">  
      <div <div style="background-color:rgb(0,0,0);background-image:url(http://www.zingerbugimages.com/backgrounds/yellow_mini_flowers.gif);background-position:top left;background-repeat:repeat;background-attachment:fixed;}" class="thumbnail">
      <img src="/images/skylogo.jpg" alt="Sky">
      <div class="caption">
        <h3>Sky - Get into Tech</h3>
        <p>Awesome initiative run by Sky to train and retain badass ladies considering a career in the tech industry. Grazie Sky!</p>
        <p><a href="http://getintotech.sky.com/" class="btn btn-default" style="background-color:orange;" role="button"><span style="font-weight:bold">Go to Website</span></a> <a href="#" class="btn btn-default" style="background-color:greenyellow;" role="button"><span style="font-weight:bold">Read More</span></a></p>
      </div>
     </div>  
  </div>   
     
</div>
  
  <!-- Second Row Thumbnails -->
  
 <div class="row">
     
     <!-- First thumbnail - Women's aid -->
     
  <div class="col-sm-6 col-md-4">  
    <div <div style="background-color:rgb(0,0,0);background-image:url(http://www.zingerbugimages.com/backgrounds/yellow_mini_flowers.gif);background-position:top left;background-repeat:repeat;background-attachment:fixed;}" class="thumbnail">  
      <img src="/images/womensaid.png" alt="Women's Aid">
      <div class="caption">
        <h3>Women's Aid Leeds</h3>
        <p>Charitable organisation aiming to protect women and children in Leeds from domestic violence and the damaging repercussion it can have on their lives.</p>
        <p><a href="http://www.leedswomensaid.co.uk/" class="btn btn-primary" style="background-color:purple;" role="button"><span style="font-weight:bold">Go to Website</span></a></p>
      </div>
    </div>
  </div>  
     
     <!-- Second thumbnail - Leeds Feminist Network -->
      
  <div class="col-sm-6 col-md-4">  
      <div <div style="background-color:rgb(0,0,0);background-image:url(http://www.zingerbugimages.com/backgrounds/yellow_mini_flowers.gif);background-position:top left;background-repeat:repeat;background-attachment:fixed;}" class="thumbnail">
      <img src="/images/leedsfeministnetwork.jpg" alt="Leeds Feminist Network">
      <div class="caption">
        <h3>Leeds Feminist Network</h3>
        <p>Part of the wider Leeds for Change network. Aiming to make the city we live in a better and fairer place for all.</p>
        <p><a href="https://www.facebook.com/pg/LSFN-Leeds-Feminist-Network-229437240469458/about/" class="btn btn-primary" style="background-color:blue;" role="button"><span style="font-weight:bold">Go to Facebook Page</span></a></p>
      </div>
     </div>  
  </div>
     
     <!-- Third thumbnail - Code First Girls -->
     
  <div class="col-sm-6 col-md-4">  
      <div <div style="background-color:rgb(0,0,0);background-image:url(http://www.zingerbugimages.com/backgrounds/yellow_mini_flowers.gif);background-position:top left;background-repeat:repeat;background-attachment:fixed;}" class="thumbnail">
      <img src="/images/codefirstgirls.png" alt="Code First Girls">
      <div class="caption">
        <h3>Code First Girls</h3>
        <p>Multi-award winning social enterprise working with men and women to address the gender gap in the tech industry.</p>
        <p><a href="http://www.codefirstgirls.org.uk/" class="btn btn-primary" style="background-color:red;" role="button"><span style="font-weight:bold">Go to Website</span></a></p>
      </div>
     </div>  
  </div>   
     
 </div>
        

</body>  

</html>

@endsection