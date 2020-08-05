<?php

namespace App\Http\Controllers;

use App\Kategoriler;
use App\Models\Urun;
use App\Urunler;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{


    public function index()
    {
        $urunler = Urunler::all();
        $kategoriler = Kategoriler::all();

        return view('anasayfa',compact('urunler','kategoriler'));
    }
    public function kategoriler($slug)
    {
        $kategoriler = Kategoriler::where('slug',$slug)->first();
        $urunler = Urunler::where('kategori_id',$kategoriler->id)->get();
        return view('kategoriler',compact('kategoriler','urunler'));

    }
    public function urunler($slug)
    {
        $urunler = Urunler::where('slug',$slug)->first();
        return view('urundetay',compact('urunler'));


    }

}
