<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function (){
        return view('admin-pages.index');
    }
}
