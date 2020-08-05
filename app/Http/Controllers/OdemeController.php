<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class OdemeController extends Controller
{
    public function index()
    {
        if(count(Cart::content())==0)
        {
            return redirect()->route('anasayfa');

        }
        return view('siparis');


    }
}
