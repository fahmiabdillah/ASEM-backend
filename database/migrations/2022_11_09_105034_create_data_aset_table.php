<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_aset', function (Blueprint $table) {
            $table->integer('aset_id', true);
            $table->string('aset_name')->nullable();
            $table->integer('aset_tipe')->nullable();
            $table->integer('aset_jenis')->nullable();
            $table->integer('aset_kondisi')->nullable();
            $table->integer('aset_sub_unit')->nullable();
            $table->integer('aset_kode')->nullable();
            $table->integer('nomor_sap')->nullable();
            $table->string('foto_aset1')->nullable();
            $table->string('foto_aset2')->nullable();
            $table->string('foto_aset3')->nullable();
            $table->string('foto_aset4')->nullable();
            $table->string('geo_tag1')->nullable();
            $table->string('geo_tag2')->nullable();
            $table->string('geo_tag3')->nullable();
            $table->string('geo_tag4')->nullable();
            $table->double('aset_luas')->nullable();
            $table->dateTime('tgl_input')->nullable();
            $table->dateTime('tgl_oleh')->nullable();
            $table->bigInteger('nilai_residu')->nullable();
            $table->bigInteger('nilai_oleh')->nullable();
            $table->string('nomor_bast')->nullable();
            $table->string('masa_susut')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('foto_qr')->nullable();
            $table->string('no_inv')->nullable();
            $table->string('foto_aset_qr')->nullable();
            $table->integer('status_posisi')->nullable();
            $table->integer('unit_id')->nullable();
            $table->integer('afdeling_id')->nullable();
            $table->integer('user_input_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_aset');
    }
}
