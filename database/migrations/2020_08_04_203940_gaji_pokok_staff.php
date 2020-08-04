<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GajiPokokStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_pokok_staff', function (Blueprint $table) {
            $table->bigInteger('masa_kerja');
            $table->integer('IA');
            $table->integer('IB');
            $table->integer('IC');
            $table->integer('ID');
            $table->integer('IIA');
            $table->integer('IIB');
            $table->integer('IIC');
            $table->integer('IID');
            $table->integer('IIIA');
            $table->integer('IIIB');
            $table->integer('IIIC');
            $table->integer('IIID');
            $table->integer('IVA');
            $table->integer('IVB');
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
