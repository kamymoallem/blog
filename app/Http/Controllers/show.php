<?php

namespace App\Http\Controllers;

use App\Contents;
use Illuminate\Http\Request;

class show extends Controller
{
    public function index()
    {
        $contents = Contents::all()->toArray();

        echo "<pre>";
        print_r($contents);
    }
}
