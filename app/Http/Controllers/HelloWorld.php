<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelloWorld extends Controller
{
    public function hello()
    {
        $model = new \App\HelloWorld();
        $data["hola"]=$model->getString();;

        return view('helloworld',$data);
    }
}
