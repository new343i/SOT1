<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_maestro extends Model
{
    use HasFactory;
    protected $table="tb_maestro";
    protected $fillable = [
        'N_maestro',
        'Num_maestro',
        'Area_maestro',
        'Tutorado',
        'Clave_materia'
    ];
}
