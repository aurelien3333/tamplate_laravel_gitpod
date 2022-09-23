<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('app.test.index');
    }

    public function preTest()
    {
        return view('app.test.pre-test');
    }
}
