<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepet extends Model
{
    protected $table = "sepet";
    protected $guarded = [];

    public function sepet()
    {
        return $this->hasOne('App\Siparis');

    }
}
