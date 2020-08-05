<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SepetUrun extends Model
{
    protected $table = "Sepet_urun";
    protected $guarded = [];

    public function urun()
    {
        return $this -> belongsTo('App\Urunler');

    }
}
