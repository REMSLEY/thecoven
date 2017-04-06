<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
public function displayPosts (){
$posts = Post::all();
//dd($posts);//laravel version of vardump
}
}
