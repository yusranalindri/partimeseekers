<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mitras', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });
        Schema::table('pelamars', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });
        Schema::table('apply_lowongans', function (Blueprint $table) {
            $table->foreign('mitra_id')
                  ->references('id')
                  ->on('mitras');
            $table->foreign('pelamar_id')
                  ->references('id')
                  ->on('pelamars');
        });
        Schema::table('pembelian_pakets', function (Blueprint $table) {
            $table->foreign('mitra_id')
                  ->references('id')
                  ->on('mitras');
            $table->foreign('paket_id')
                  ->references('id')
                  ->on('pakets');
                 
           
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
