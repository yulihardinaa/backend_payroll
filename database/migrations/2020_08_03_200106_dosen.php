<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('dosen', function (Blueprint $table) {
            $table->bigInteger('nik')->unique();
            $table->string('nama_dosen');
            $table->string('nidn')->unique();
            $table->string('email');
            $table->date('tgl_masuk');
            $table->string('golongan');
            $table->string('jabfung');
            $table->bigInteger('jabstruk');
            $table->integer('tukin');
            $table->primary('nik');

    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
