<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('poktan');
            $table->string('id_poktan');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->text('laporan');
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
        Schema::dropIfExists('lapors');
    }
}
