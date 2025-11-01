<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NextController extends Controller
{
    public function index()
    {
        // next.blade.php を呼び出す
        return view('next');
    }
}
