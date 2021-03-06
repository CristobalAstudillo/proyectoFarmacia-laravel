<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuario';
    use HasFactory;
    protected $fillable = ['id', 'primerNombre', 'apellidos', 'idTipoDoc', 'nroDoc',
        'correoElectronico', 'contraseña','nroTelefonico', 'adminOpc'];
}
