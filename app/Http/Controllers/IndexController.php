<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class IndexController extends Controller
{
    public function Test()
    {
    	throw new Exception();
    }
}
