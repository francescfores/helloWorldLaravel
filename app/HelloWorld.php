<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelloWorld extends Model
{
    protected $string = "Hello world";

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }


}
