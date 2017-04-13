@extends('main')
@section('pageTitle', '| About')
@section ('content')
    <head>

    </head>
    
    <title>About the Yellow Rose</title>
    
    <body>
        
            <div class="content">
                <div class="title m-b-md">
                    About the Yellow Rose
                </div>

                <div class="links">
                    <a href="#">The Gang</a>
                    <a href="#">News</a>
                    <a href="#">Ladies of Code</a>
                    <a href="#">Get into Tech</a>
                    <a href="#">Links</a>
                </div>
               
            </div>
        </div>
        
        <img src="{{URL::asset('/xampp/TheCovenDocs/TheCovenPics/IMG_2849.png')}}" alt="Picture of the gang" height="400" width="600"
        
        <!-- <img src="/xampp/TheCovenDocs/TheCovenPics/IMG_2849.jpg" alt="Picture of the gang" style="width:5184px;height:3456px;"> -->
        
        <!-- <div class="container">
               <div class="row">
                <div class="col-md-12">
                    <h1> About Us </h1>
                </div>
            </div>
        </div> OPTION TO USE THIS INSTEAD -->  
        
    </body>
</html>
@endsection