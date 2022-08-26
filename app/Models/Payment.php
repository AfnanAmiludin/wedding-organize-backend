<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_client',
        'tunai_keseluruhan',
        'tanggal',
        'terbayar',
        'keterangan',
        'wo_id',
        'client_id',
    ];

    public function paymentDetail()
    {
        return $this->hasMany(PaymentDetail::class, 'Payment_id', 'id');
    }
}
