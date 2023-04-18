<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refcoa extends Model
{
    use HasFactory;
    protected $table= "refcoas";
    protected $primaryKey= "id";
    protected $fillable= [
        'kd_indukcoa','name_induk_coa'
    ];
}
