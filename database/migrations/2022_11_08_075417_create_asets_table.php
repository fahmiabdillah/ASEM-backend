<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asets', function (Blueprint $table) {
            $table->id();
            $table->string("aset_name")->nullable();
            $table->int("aset_jenis")->nullable();
            $table->int("aset_kondisi")->nullable();
            $table->int("aset_sub_unit")->nullable();
            $table->int("aset_kode")->nullable();
            $table->int("nomor_sap")->nullable();
            $table->string("foto_aset1")->nullable();
            $table->string("foto_aset2")->nullable();
            $table->string("foto_aset3")->nullable();
            $table->string("foto_aset4")->nullable();
            $table->string("geo_tag_1")->nullable();
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
        Schema::dropIfExists('asets');
    }
}
