<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GajiDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_dosen', function (Blueprint $table) {
            $table->bigInteger('nik')->unique();
            $table->integer('bulan');
            $table->integer('tahun');
            $table->integer('gaji_pokok');
            $table->integer('tunjangan_jabfung');
            $table->integer('tunjangan_jabstruk');
            $table->integer('tunjangan_kinerja');
            $table->integer('tunjangan_anak');
            $table->integer('tunjangan_bpjs');
            $table->integer('pot_bpjs');
            $table->integer('pot_sukaduka');
            $table->primary(['nik','bulan','tahun']);

    
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
