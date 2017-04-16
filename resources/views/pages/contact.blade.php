@extends('main')
@section('pageTitle', '| Contact')
@section('content')

<head>
    
    <style>
    img {
    display: block;
    margin: 0 auto;
        }
   </style>
    
    <title>Contact Us</title>
    
</head>
      
<body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="text-align: center"> Contact the Yellow Rose </h1>
                    <hr>
                    <form action method="post">
                        <div class="form-group">
                            <label name="email">Email;</label>
                            <input id="email" name="email" class="form-control">
                        </div>    
                        
                        <div class="form-group">
                            <label name="subject">Subject;</label>
                            <input id="subject" name="subject" class="form-control">
                        </div>    
                        
                        <div class="form-group">
                            <label name="message">Message;</label>
                            <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                        </div>    
                        
                        <input type="submit" value="Send us a message!" class="btn btn-success">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>        
    <img src="/images/IMG_2918.png" alt="Watercooler Moment" height="432" width="648"/>    
</body>       
</html>
@endsection