<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingLapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_lap', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan',50);
            $table->string('alamat',100);
            $table->string('no_telp',12);
            $table->string('web',20);
            $table->string('logo');
            $table->string('no_hp',12);
            $table->string('email',50);
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
        Schema::dropIfExists('setting_lap');
    }
}
