<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coa extends Model
{
    use HasFactory;

    protected $primaryKey= "id";
    protected $fillable= [
        'akun_no','nama_coa','tipe','dept','id_comp'
    ];

    public function saldoCoa() {
    return $this->belongsTo(Saldocoa::class, 'akun_no','no_coa');
    }
}
