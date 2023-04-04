<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldocoa extends Model
{
    use HasFactory;

    protected $primaryKey= "id";
    protected $fillable= [
        'saldo_awal','anggaran','target','tanggal','no_coa'
    ];

    public function coa() {
    return $this->hasMany(Coa::class, 'akun_no', 'no_coa');
}
}
