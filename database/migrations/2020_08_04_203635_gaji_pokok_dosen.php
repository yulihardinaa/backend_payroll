<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GajiPokokDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_pokok_dosen', function (Blueprint $table) {
            $table->bigInteger('masa_kerja');
            $table->integer('IIIB');
            $table->integer('IIIC');
            $table->integer('IIID');
            $table->integer('IVA');
            $table->integer('IVB');
            $table->integer('IVC');
            $table->integer('IVD');
            $table->integer('IVE');
            $table->primary('masa_kerja');

    
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
