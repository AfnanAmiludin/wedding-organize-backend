<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentsDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'bayar',
        'tanggal',
        'total_bayar',
        'jam',
        'payment_id',
    ];

}
