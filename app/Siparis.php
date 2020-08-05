<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siparis extends Model
{
    protected $table = "siparis";
    protected $fillable = ['sepet_id','siparis_tutari','banka','taksit_sayisi','durum'];

    public function sepet()
    {
        return $this->belongsTo('App\Sepet');

    }
}
