<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tanggal_laporan', 'jenis_laporan', 'total_pemasukan', 'total_pengeluaran', 'saldo_akhir',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
