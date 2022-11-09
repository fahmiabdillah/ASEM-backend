<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id', true);
            $table->string('user_name', 100)->nullable();
            $table->integer('user_nip')->nullable();
            $table->string('user_email', 100)->nullable();
            $table->string('user_jabatan', 100)->nullable();
            $table->integer('hak_akses_id')->nullable();
            $table->integer('unit_id')->nullable();
            $table->integer('sub_unit_id')->nullable();
            $table->integer('afdeling_id')->nullable();
            $table->string('user_pass', 100)->nullable();
            $table->string('api_token', 100)->nullable();
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
        Schema::dropIfExists('users');
    }
}
