<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    
    protected $table = 'pembayaran';
    protected $guarded = ['id'];

    public function pesanuji()
    {
        return $this->belongsTo(PesanUji::class, 'pesan_uji_id');
    }
    
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
}
