<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PController extends Controller
{
    public function p()
    {
        return view('p');
    }
    public function Profile()
    {
        return view ('Profile');
    }
}
