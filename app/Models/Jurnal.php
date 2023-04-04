<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;
   
    protected $primaryKey= "id";
    protected $fillable= [
        'tipe_jurnal','deskripsi'
    ];
}
