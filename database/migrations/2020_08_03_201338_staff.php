<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Staff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->integer('nik')->unique();
            $table->string('nama_staff');
            $table->string('email');
            $table->date('tgl_masuk');
            $table->string('golongan');
            $table->integer('jabstruk');
            $table->integer('tukin');
            $table->integer('jumanak');
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
