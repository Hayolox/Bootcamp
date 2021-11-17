<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $camps = Camp::get();
        return view('pages.home',compact('camps'));
    }
}
