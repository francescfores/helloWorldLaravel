<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    public function hello()
    {
        $model = new \App\HelloWorld();
        $data["hola"]=$model->getString();;

        return view('helloworld',$data);
    }
}
