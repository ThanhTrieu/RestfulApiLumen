<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return $this->test();
    }

    public function view()
    {
        return Controller::demo();
    }
}
