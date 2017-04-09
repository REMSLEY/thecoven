<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DemoController extends BaseController
{

    public function test() {
        $model = ['wordOfTheDay' => 'nuthatch'];
        
        return view('test', $model);
    }

}
