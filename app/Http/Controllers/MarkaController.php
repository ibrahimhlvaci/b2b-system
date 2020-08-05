<?php

namespace App\Http\Controllers;

use App\Markalar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MarkaController extends Controller
{
    public function markalar()
    {
        $markalar = Markalar::all();
        return view('yonetim.markalar',compact('markalar'));

    }
    public function ekle()
    {
        return view('yonetim.markaekle');

    }


    public function markaekle()
    {
        Markalar::updateOrCreate([
            'marka_adi' => request('marka_adi'),
            'slug'      => Str::slug(request('marka_adi'), '-'),



        ]);

        return redirect() ->route('yonetim.markalar');

    }
    public function form($id)
    {   $markalar = Markalar::find($id);
        return view('yonetim.markaduzenle',compact('markalar'));

    }
    public function kaydet($id)
    {
        $markalar = Markalar::where('id',$id);
        $markalar->update([
            'marka_adi' => request('marka_adi'),
            'slug'      => Str::slug(request('marka_adi'), '-'),


        ]);
        return redirect() -> route('yonetim.markalar');

    }
    public function markasil($id)
    {
        $markalar = Markalar::find($id);
        $markalar->delete();
        return redirect() -> route('yonetim.markalar');

    }

}
