<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urunler', function (Blueprint $table) {
            $table->increments('id');
            $table -> text('urun_adi');
            $table -> text('slug');
            $table -> text('aciklama');
            $table -> integer('fiyati');
            $table->integer('kategori_id')->unsigned();
            $table -> text('resim');
            $table -> text('marka');
            $table -> text('stok_kodu');
            $table -> integer('stok');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urunler');
    }
}
