<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('poktan');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('id_poktan')->nullable();
            $table->string('status');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->text('laporan');
            $table->text('solusi');
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
        Schema::dropIfExists('reports');
    }
}
