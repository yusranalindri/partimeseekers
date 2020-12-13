<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_lowongans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('berkas');
            $table->UnsignedbigInteger('pelamar_id');
            $table->UnsignedbigInteger('lowongan_id');
            $table->enum('status', ['diterima', 'ditolak']);
            $table->timestamps();

            $table->foreign('pelamar_id')
                ->references('id')
                ->on('pelamars')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('lowongan_id')
                ->references('id')
                ->on('lowongans')
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
        Schema::dropIfExists('apply_lowongans');
    }
}
