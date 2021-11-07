<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('crypto_id', 50);
            $table->string('crypto_symbol', 10); # Abbreviation of the crypto currency lower case ('btc', 'eth')
            $table->string('crypto_name', 50);
            $table->boolean('sell')->default(false);
            $table->decimal('amount', 25, 8);
            $table->decimal('price', 25, 8);
            $table->decimal('total', 25, 8);
            $table->tinyText('currency')->default('CHF');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crypto_transactions');
    }
}
