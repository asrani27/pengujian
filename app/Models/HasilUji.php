<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilUji extends Model
{
    use HasFactory;
    protected $table = 'hasil_uji';
    protected $guarded = ['id'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
    
    public function statusuji()
    {
        return $this->belongsTo(StatusUji::class, 'status_uji_id');
    }
}
