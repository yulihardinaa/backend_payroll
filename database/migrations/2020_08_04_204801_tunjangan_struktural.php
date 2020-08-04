<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TunjanganStruktural extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunjangan_struktural', function (Blueprint $table) {
            $table->bigIncrements('id_jabstruk');
            $table->string('nama_struktural');
            $table->bigInteger('nominal');
            $table->primary('id_jabstruk');
   
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
