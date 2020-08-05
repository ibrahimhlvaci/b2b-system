<?php

namespace App\Http\Controllers;

use App\Sepet;
use App\SepetUrun;
use App\Urunler;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;




class SepetController extends Controller
{
    public function index()
    {
        return view('sepet');

    }

    public function ekle()
    {
        $urun = Urunler::find(request('id'));
        $cartItem= Cart::add($urun->id,$urun->urun_adi,request('adet'),$urun->fiyati);

        if (auth()->check())
        {
            $aktif_sepet_id = session('aktif_sepet_id');
            if(!isset($aktif_sepet_id))
            {
                $aktif_sepet = Sepet::create([
                    'kullanici_id' => auth()->id()



                ]);
                $aktif_sepet_id = $aktif_sepet->id;
                session()->put('aktif_sepet_id',$aktif_sepet_id);

            }
            SepetUrun::updateOrCreate(
                ['sepet_id'=>$aktif_sepet_id,'urun_id'=>$urun->id],
                ['adet'=>$cartItem->qty,'tutar'=>$urun->fiyati,'durum'=>'Beklemede']
            );


        }


        return redirect()->route('sepet.index');

    }
    public function kaldir($rowid)
    {
        if(auth()->check())
        {
            $aktif_sepet_id = session('aktif_sepet_id');
            $cartItem = Cart::get($rowid);
            SepetUrun::where('sepet_id',$aktif_sepet_id)->where('urun_id',$cartItem->id)->delete();

        }


        Cart::remove($rowid);
        return redirect()->route('sepet.index');

    }
}
