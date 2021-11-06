<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('short_title', 10);
            $table->string('long_title', 50);
        });

        // CreateCryptoCurrenciesTable::upsert([
        //     ['id' => 'btc', 'short_title' => 'BTC', 'long_title' => 'Bitcoin'],
        //     ['id' => 'eth', 'short_title' => 'ETH', 'long_title' => 'Ethereum'],
        //     ['id' => 'xrp', 'short_title' => 'XRP', 'long_title' => 'Ripple']
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crypto_currencies');
    }
}
