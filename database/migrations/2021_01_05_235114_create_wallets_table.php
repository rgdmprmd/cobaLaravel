<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id('wallet_id');
            $table->dateTime('wallet_time');
            $table->integer('wallet_spend');
            $table->integer('wallet_save');
            $table->text('wallet_exc');
            $table->dateTime('dt_input');
            $table->dateTime('dt_update')->nullable();
            $table->integer('wallet_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
