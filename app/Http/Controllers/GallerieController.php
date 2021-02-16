<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallerieController extends Controller
{
    public function index(){

        return view('page.gallerie');
    }
}
