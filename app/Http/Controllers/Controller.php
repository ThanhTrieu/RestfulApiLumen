<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function test()
    {
    	return "This is test";
    }

    protected static function demo()
    {
    	return "This is demo";
    }
}
