<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'balance', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactionsAsSource()
    {
        return $this->hasMany(Transaction::class, 'source_account_id');
    }

    public function transactionsAsDestination()
    {
        return $this->hasMany(Transaction::class, 'destination_account_id');
    }
}
