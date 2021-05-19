<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntasModel extends Model
{
    protected $table = 'preguntas';
    protected $primaryKey = 'id_preguntas';
    protected $fillable = [
        'id_preguntas',
        'id_product',
        'propietario',
        'pregunta',
        'id',
        'respuesta'
    ];
    public $timestamps = true;

    public function interesado(){
        return $this->belongsTo('App\User','id');
    }
    public function producto(){
        return $this->belongsTo('App\ProductosModel','id_product');
    }

}
