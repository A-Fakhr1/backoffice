<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldocoa extends Model
{
    use HasFactory;

    protected $table="saldocoas";
    protected $primaryKey= "id";
    protected $fillable= [
        'saldo_awal','anggaran','target','tanggal','coa_akun'
    ];

    public function coa() {
    return $this->hasMany(Coa::class,'akun_coa','coa_akun');
}
}
