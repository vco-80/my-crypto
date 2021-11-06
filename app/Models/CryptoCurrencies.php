<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoCurrencies extends Model
{
    use HasFactory;

    protected $fillable = [
        'crypto_id',
        'title'
    ];

    public $incrementing = false;

    public function transactions()
    {
        return $this->hasMany(CryptoTransactions::class);
    }
}
