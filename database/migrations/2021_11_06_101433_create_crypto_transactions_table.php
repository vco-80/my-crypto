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
            $table->enum('type', ['buy', 'sell']);
            $table->decimal('amount');
            $table->decimal('price');
            $table->decimal('total');
            $table->tinyText('currency')->default('CHF');
            $table->date('date');

            $table->foreignId('currency_id')->constrained('crypto_currencies');
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
