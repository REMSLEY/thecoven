@if(Session::has('success'))
<div class="alert alert-success" role="alert"></div>
<strong>Success:</strong> {{Session::get('success')}}
@endif

