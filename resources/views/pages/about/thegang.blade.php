@extends('main')
@section('pageTitle', '| The Gang')
@section('content')

<div class="page-header">
  <h1 style="text-align: center">The Gang!
      <small>Come... meet us!</small></h1>
</div>


<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="/images/IMG_2872_edit.png" alt="Picture of Miren" height="346" width="518"/>
    </a>
  </div>
  <div class="media-body">
    <h3 class="media-heading">Miren</h3>
    Hi there! I like a nice bowl of porridge in the morning. I like HTML and CSS because it's easy ;)
  </div>
</div>

<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="/images/IMG_2877.png" alt="Picture of Sally" height="346" width="518"/>
    </a>
  </div>
  <div class="media-body">
    <h3 class="media-heading">Sally</h3>
    I like cycling but not up-hill. I am deeply suspicious of loosely-typed coding languages.
  </div>
</div>

<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="/images/IMG_2892.png" alt="Picture of Bernice" height="346" width="518"/>
    </a>
  </div>
  <div class="media-body">
    <h3 class="media-heading">Bernice</h3>
    I like animals more than I like people. Sometimes I prefer the company of gin and jazz to that of anything that breathes.
  </div>
</div>
 
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="/images/IMG_2886_edit.png" alt="Picture of Rachel" height="346" width="518"/>
    </a>
  </div>
  <div class="media-body">
    <h3 class="media-heading">Rachel</h3>
    Hello! I get giddy when I try a new function and it works (I'm looking at you JS alert box).
  </div>
</div>



@endsection

