<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Controller to deal with some pages
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'Rangga D. Permadi']);
    }
}
