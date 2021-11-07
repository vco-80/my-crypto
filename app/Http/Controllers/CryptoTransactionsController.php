<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CryptoTransactions;

class CryptoTransactionsController extends Controller
{
    public function create(Request $request)
    {
        # TODO: validation

        $ct = new CryptoTransactions;

        $sell = $request->input('sell', false);
        $amount = $request->amount;

        if ($sell == true) {
            $amount = $amount * -1;
        }

        $price = $request->price;

        $ct->crypto_id = $request->crypto_id;
        $ct->crypto_symbol = $request->crypto_symbol;
        $ct->crypto_name = $request->crypto_name;
        $ct->sell = $sell;
        $ct->amount = $amount;
        $ct->price = $price;
        $ct->total = $amount * $price;
        $ct->currency = $request->input('currency', 'CHF');
        $ct->date = $request->date;

        $ct->save();
    }

    public function getGrouped()
    {
        return CryptoTransactions::select(CryptoTransactions::raw(
                'sum(total) as total, sum(amount) as amount, crypto_id, crypto_symbol, crypto_name'
            ))
            ->groupBy('crypto_id', 'crypto_symbol', 'crypto_name')
            ->get();
    }
}
