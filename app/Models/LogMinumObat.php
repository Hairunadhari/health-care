<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogMinumObat extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function jadwal()
    {
        return $this->belongsTo(JadwalObat::class, 'jadwal_obat_id');
    }
}
