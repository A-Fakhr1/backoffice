<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coa extends Model
{
    use HasFactory;

    protected $table = "coas";
    protected $primaryKey= "id";
    protected $fillable= [
        'akun_coa','nama_coa','tipe','dept','id_comp'
    ];

    public function saldoCoa() {
    return $this->belongsTo(Saldocoa::class,'akun_coa','coa_akun');
    }
}