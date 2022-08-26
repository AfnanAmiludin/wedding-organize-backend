<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_kegiatan',
        'detail_kegiatan',
        'nama_client',
        'tanggal',
        'jam',
        'tempat',
        'wo_id',
        'client_id',
        'member_id',
    ];

}
