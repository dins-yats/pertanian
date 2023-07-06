<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_poktans', function (Blueprint $table) {
            $table->id();
            $table->string('id_poktan')->unique();
            $table->string('nama_poktan', 60);
            $table->integer('NIK')->unique();
            $table->string('ketua', 60);
            $table->text('alamat_sekretariat');
            $table->string('kelurahan', 100);
            $table->string('kecamatan', 100);
            $table->string('verifikasi', 100);
            $table->string('bantuan', 100);
            $table->string('sumber_dana', 100);
            $table->text('jenis_bantuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_poktans');
    }
};
