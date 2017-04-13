@extends('main')
@section('pageTitle', '| Links')
@section('content')

<head>
    
    <title>Contact Us</title>
    
</head>
      
<body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1> Contact the Yellow Rose </h1>
                    <hr>
                    <form>
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
                        
                    </form>
                </div>
            </div>
        </div>        
        
</body>       
</html>
@endsection