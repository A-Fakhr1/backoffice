<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalUmum extends Model
{
    use HasFactory;
    protected $table= "jurnal_umums";
    protected $primaryKey= "id";
    protected $fillable= [
        'no_jurnal','tanggal','no_dokumen','no_referensi','keterangan','akuncoa','debit','kredit','dept_name'
    ];
}