<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusUji extends Model
{
    use HasFactory;
    protected $table = 'status_uji';
    protected $guarded = ['id'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'pembayaran_id');
    }
}
