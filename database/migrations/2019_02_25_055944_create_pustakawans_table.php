<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePustakawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pustakawan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pegawai')->nullable();
            $table->string('nama')->nullable();
            $table->enum('jk', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('no_hp')->nullable();
            $table->string('alamat')->nullable();
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
        Schema::dropIfExists('pustakawan');
    }
}
