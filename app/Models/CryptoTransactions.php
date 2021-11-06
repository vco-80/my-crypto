<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoTransactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'amount',
        'price',
        'total',
        'currency',
        'date'
    ];
}
