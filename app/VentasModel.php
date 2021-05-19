<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentasModel extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'id_ventas';
    protected $fillable = [
        'id_ventas',
        'id_product',
        'vendedor',
        'id',
        'total',
        'pago'
    ];

    public function producto(){
        return $this->belongsTo('App\ProductosModel','id_product');
    }
    public function comprador(){
        return $this->belongsTo('App\User','id');
    }
}
