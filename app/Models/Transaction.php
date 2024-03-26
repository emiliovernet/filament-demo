<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date', 'type', 'source_account_id', 'destination_account_id', 'amount',
    ];


    protected static function booted()
    {
        static::creating(function ($transaction) {
            $transaction->sourceAccount->decrement('balance', $transaction->amount);
            $transaction->destinationAccount->increment('balance', $transaction->amount);
        });
    }

    public function sourceAccount()
    {
        return $this->belongsTo(Account::class, 'source_account_id');
    }

    public function destinationAccount()
    {
        return $this->belongsTo(Account::class, 'destination_account_id');
    }
}
