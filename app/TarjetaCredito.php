<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarjetaCredito extends Model
{
    protected $table='tarjeta_creditos';

    protected $primaryKey='cod_socio';

    public $timestamps = false;

    protected $fillable =[
        'cod_socio',
        'nombre',
        '#_tc',
        'fecha_emision',
        'monto',
        'saldo',
    ];

    protected $guarded =[
    ];
}
