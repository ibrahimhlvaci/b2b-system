<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function()
{
    Route::get('/','AnasayfaController@index')->name('anasayfa');
    Route::get('/kategoriler/{slug}','AnasayfaController@kategoriler')->name('kategoriler');
    Route::get('/urunler/{slug}','AnasayfaController@urunler')->name('urunler');
    Route::get('/oturumac','KullaniciController@giris')->name('kullanici.oturumac');

    Route::get('/oturumukapat','KullaniciController@oturumukapat')->name('kullanici.oturumukapat');
    Route::post('/sepet/ekle','SepetController@ekle')->name('sepet.ekle');
    Route::get('/sepet','SepetController@index')->name('sepet.index');
    Route::delete('/sepet/kaldir/{rowid}','SepetController@kaldir')->name('sepet.kaldir');
    Route::get('/odeme','OdemeController@index')->name('odeme');

}
);
Route::post('/oturumac','KullaniciController@giris_yap')->name('kullanici.oturumac');





Route::group(['prefix'=>'yonetim'],function()

{
    Route::get('/','YonetimController@index')->name('yonetim.anasayfa');
    Route::get('/kategoriler','KategoriController@kategoriler')->name('yonetim.kategoriler');
    Route::get('/kategoriler/duzenle/{id}','KategoriController@form')->name('yonetim.kategoriler.duzenle');
    Route::post('/kategoriler/kaydet/{id?}','KategoriController@kaydet')->name('yonetim.kategoriler.kaydet');
    Route::get('/kategoriler/ekle','KategoriController@ekle')->name('yonetim.kategoriler.ekle');
    Route::post('/kategoriler/ekle','KategoriController@kategoriekle')->name('yonetim.kategoriler.ekle');
    Route::get('/kategoriler/sil/{id?}','KategoriController@kategorisil')->name('yonetim.kategoriler.sil');
    Route::get('/urunler/ekle','UrunController@ekle')->name('yonetim.urunler.ekle');
    Route::post('/urunler/ekle','UrunController@urunekle')->name('yonetim.urunler.ekle');
    Route::get('/urunler','UrunController@urunler')->name('yonetim.urunler');
    Route::get('/urunler/duzenle/{id}','UrunController@form')->name('yonetim.urunler.duzenle');
    Route::post('/urunler/kaydet/{id?}','UrunController@kaydet')->name('yonetim.urunler.duzenle1');
    Route::get('/urunler/sil/{id?}','UrunController@urunsil')->name('yonetim.urunler.sil');
    Route::get('/markalar','MarkaController@markalar')->name('yonetim.markalar');
    Route::get('/markalar/ekle','MarkaController@ekle')->name('yonetim.marka.ekle');
    Route::post('/markalar/ekle','MarkaController@markaekle')->name('yonetim.marka.ekle');
    Route::get('/markalar/duzenle/{id}','MarkaController@form')->name('yonetim.marka.duzenle');
    Route::post('/markalar/kaydet/{id?}','MarkaController@kaydet')->name('yonetim.marka.kaydet');
    Route::get('/markalar/sil/{id?}','MarkaController@markasil')->name('yonetim.marka.sil');
    Route::get('/kullanicilar/ekle','KullaniciController@form')->name('yonetim.kullanicilar.ekle');
    Route::post('/kullanicilar/ekle','KullaniciController@ekle')->name('yonetim.kullanicilar.ekle');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
