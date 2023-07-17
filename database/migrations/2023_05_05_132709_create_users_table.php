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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('username', 100)->unique();
            // $table->string('level');
            $table->string('password');
            $table->string('id_poktan')->unique();
            $table->string('nama_poktan');
            $table->string('NIK')->unique();
            $table->string('ketua');
            $table->text('alamat_sekretariat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('verifikasi');
            $table->string('bantuan');
            $table->string('sumber_dana');
            $table->text('jenis_bantuan');
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
