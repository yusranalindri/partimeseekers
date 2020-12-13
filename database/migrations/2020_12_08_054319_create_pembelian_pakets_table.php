<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembelianPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian_pakets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paket_id');
            $table->unsignedBigInteger('mitra_id');
            $table->string('bukti_transfer');
            $table->unsignedBigInteger('status_pembelian_id');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->timestamps();

            $table->foreign('paket_id')
                ->references('id')
                ->on('pakets')
                ->onUpdate('restrict')
                ->onDelete('restrict');

            $table->foreign('mitra_id')
                ->references('id')
                ->on('mitras')
                ->onUpdate('restrict')
                ->onDelete('restrict');


            $table->foreign('status_pembelian_id')
                ->references('id')
                ->on('status_pembelians')
                ->onUpdate('restrict')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian_pakets');
    }
}
