<?php

namespace App\Http\Controllers;

use App\Kategori_Urun;
use App\Kategoriler;
use App\Markalar;
use App\Urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support;

class UrunController extends Controller
{
    public function urunler()
    {
        $urunler = Urunler::all();

        return view('yonetim.urunler',compact('urunler'));

    }
    public function form($id)
    {
        $urunler = Urunler::find($id);
        return view('yonetim.urunduzenle',compact('urunler'));

    }
    public function kaydet($id)
    {
        $urunler = Urunler::where('id',$id);


        $urunler->update([

            'stok_kodu'     => request('stok_kodu'),
            'marka'         => request('urun_marka'),
            'aciklama'      => request('urun_aciklama'),
            'stok'          => request('stok'),
            'slug'          => Str::slug(request('urun_adi'), '-'),
            'urun_adi'      => request('urun_adi'),
            'fiyati'        => request('urun_fiyati'),

        ]);
        return redirect() ->route('yonetim.urunler');

    }

    public function urunsil($id)
    {
        $urunler = Urunler::find($id);
        $urunler->delete();
        return redirect() -> route('yonetim.urunler');


    }

    public function ekle()
    {
        $markalar = Markalar::all();
        $kategoriler = Kategoriler::all();
        return view('yonetim.urunlerekle',compact('markalar','kategoriler'));

    }
    public function urunekle(Request $request)
    {
        $kategoriler = Kategoriler::all();
        $markalar = Markalar::all();
        if($request->hasFile('urun_resim_1'))
        {
            $urun_resimi_1 = $request->urun_resim_1;
            $dosyaadi= time().".".$urun_resimi_1->extension();

        }
        if($urun_resimi_1->isValid())
        {
            $urun_resimi_1->move('upload/urunler',$dosyaadi);

        }

        Urunler::updateOrCreate([
            'stok_kodu'     => request('stok_kodu'),
            'marka'         => request('urun_marka'),
            'aciklama'      => request('urun_aciklama'),
            'stok'          => request('stok'),
            'slug'          => Str::slug(request('urun_adi'), '-'),
            'urun_adi'      => request('urun_adi'),
            'fiyati'        => request('urun_fiyati'),
            'resim'         => $dosyaadi,
            'marka'         => request('urun_marka'),
            'kategori_id'   => request('urun_kategori')


        ]);

        return redirect() -> route('yonetim.urunler',compact('kategoriler','markalar'));

    }
}
