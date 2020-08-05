<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriler extends Model
{
    protected $table = "kategoriler";
    protected $fillable = ['id','kategori_adi','slug'];

}
