<?php

namespace App\Http\Controllers;

use App\KullaniciDetay;
use App\Sepet;
use App\SepetUrun;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class KullaniciController extends Controller
{
    public function oturumukapat()
    {
        auth()->logout();;
        request() -> session() -> flush();
        request() -> session() -> regenerate();
        return redirect() -> route('anasayfa');


    }

    public function giris()
    {
        return view('kullanicigiris');

    }
    public function giris_yap()
    {
        if(auth()->attempt(['kullanici_adi'=>request('kullanici_adi'),'password'=>request('password')]))
        {
            request()->session()->regenerate();




                $aktif_sepet_id = Sepet::firstOrCreate(['kullanici_id'=>auth()->id()])->id;
                session()->put('aktif_sepet_id',$aktif_sepet_id);
                if(Cart::count()>0)
                {
                    foreach (Cart::content() as $cartItem)
                    {
                        SepetUrun::updateOrCreate([
                            ['sepet_id'=>$aktif_sepet_id,'urun_id'=>$cartItem->id],
                            ['adet'=>$cartItem,'tutar'=>$cartItem->price,'durum'=>'beklemede']

                        ]);

                    }

                }
                Cart::destroy();
                $seoetUrunler = SepetUrun::where('sepet_id',$aktif_sepet_id)->get();
                foreach ($seoetUrunler as $sepetUrun)
                {
                    Cart::add($sepetUrun->urun->id,$sepetUrun->urun->urun_adi,$sepetUrun->adet,
                        $sepetUrun->tutar
                    );

                }
            return redirect()->route('anasayfa');



        }


    }

    public function form()
    {

        return view('yonetim.kullaniciekle');
    }
    public function ekle()
    {
       $kullanici = user::updateOrCreate([

            'bayi_adi'      => request('bayi_adi'),
            'kullanici_adi' => request('kullanici_adi'),
            'password'      => Hash::make(request('sifre')),
            'bayi_telefon'  => request('telefon'),
            'bayi_adres'    => request('adres'),



        ]);
        $kullanici->detay()->save(new KullaniciDetay());

        return redirecwebt() -> route('yonetim.anasayfa');

    }
}
