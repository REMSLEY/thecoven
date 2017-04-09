<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    
    <body>
        @include('partials._nav')
        
        <div class="container"> 
          @yield('content')
          @include('partials._footer')
        </div> <!-- end of the .container / partial is the name of something that get reused a lot-->  
        
          @include('partials._javascript') 
          @yield('scripts')
          
    </body>
</html>   

