<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KullaniciDetay extends Model
{
    protected $table = "kullanici_detay";
    protected $guarded = [];
    protected $timespams = false;

    public function kullanici()
    {
        return $this->belongsTo('App\User');

    }
}
