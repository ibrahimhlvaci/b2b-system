<?php

namespace App\Http\Controllers;

use App\Kategoriler;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategoriler()
    {
        $kategoriler = Kategoriler::all();
        return view('yonetim.kategoriler',compact('kategoriler'));

    }
    public function form($id)
    {   $kategori = Kategoriler::find($id);
        return view('yonetim.kategoriduzenle',compact('kategori'));

    }
    public function kaydet($id)
    {
        $kategoriler = Kategoriler::where('id',$id);
        $kategoriler->update([
            'kategori_adi' => request('kategori_adi'),
            'slug'         => request('kategori_slug')

        ]);
        return redirect() ->route('yonetim.kategoriler');


    }
    public function ekle()
    {
        return view('yonetim.kategoriekle');

    }
    public function kategoriekle()
    {
        Kategoriler::updateOrCreate([
            'kategori_adi' => request('kategori_adi'),
            'slug'         => request('kategori_slug')

        ]);
        return redirect() -> route('yonetim.kategoriler');

    }
    public function kategorisil($id)
    {
        $Kategoriler = Kategoriler::find($id);
        $Kategoriler->delete();
        return redirect() -> route('yonetim.kategoriler');

    }
}
