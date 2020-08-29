<?php

namespace App\Http\Controllers\Webmaster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebmasterController extends Controller
{
    public function index()
    {
        return view('webmaster.index');
    }
}
