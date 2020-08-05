<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markalar extends Model
{
    protected $table = "Markalar";
    protected $fillable = ['marka_adi','slug'];
}
