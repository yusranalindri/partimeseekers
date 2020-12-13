<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mitra_id');
            $table->string('nama_lowongan');
            $table->string('jabatan');
            $table->unsignedBigInteger('upah');
            $table->text('kriteria');
            $table->unsignedBigInteger('status');
            $table->timestamps();


            $table->foreign('mitra_id')
                ->references('id')
                ->on('mitras')
                ->onDelete('restrict')
                ->onUpdate('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongans');
    }
}
