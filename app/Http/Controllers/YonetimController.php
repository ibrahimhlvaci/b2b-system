<?php

namespace App\Http\Controllers;

use App\Kategoriler;
use Illuminate\Http\Request;

class YonetimController extends Controller
{
    public function index()
    {
        return view('yonetim.index');

    }



}
