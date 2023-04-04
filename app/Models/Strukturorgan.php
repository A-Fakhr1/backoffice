<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strukturorgan extends Model
{
    use HasFactory;
    protected $table= "strukturorgan";
    protected $primaryKey= "id";
    protected $fillable= [
        'akun_no','dept_name','dept_head','deskripsi','id_comp'
    ];
}