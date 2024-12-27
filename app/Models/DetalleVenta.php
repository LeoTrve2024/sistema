<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalleventas';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'CANTIDAD',
        'UNIDAD',
        'DESCRIPCION',
        'PC',
        'PV',
        'PU',
        'PU_OR',
        'TIPOISC',
        'TASAISC',
        'ISCUNIT',
        'VVU',
        'TIPODSCTO',
        'DSCTOUNIT',
        'DSCTO',
        'TIPOCARGO',
        'CARGOUNIT',
        'CARGO',
        'VVitem',
        'ISC',
        'IGV',
        'TIPOOPERACION',
        'TIPOAFECTACION',
        'MONTO',
        'SUBTOTAL',
        'PRODUCTO',
        'LINK',
        'ESPRODUCTO',
        'MINCOMPRA',
        'PR',
        'COMPRIMIR',
        'CODSUNAT',
        'MULTIPLO',
        'BOLSAS',
        'TASAICBPER',
        'ICBPER',
        'IMGBOLSAS',
        'PESO',
        'FACTURABLE',
        'ALMACEN',
        'PMAYOR'
    ];
}
