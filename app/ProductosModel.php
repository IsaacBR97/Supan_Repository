<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'id_product',
        'nombre',
        'imagen',
        'precio',
        'descripcion',
        'id',
        'id_revision',
        'id_categoria',
        'motivo'
    ];
    public $timestamps = true;
    
    public function usuario(){
        return $this->belongsTo('App\User','id');
    }
    public function revision(){
        return $this->belongsTo('App\RevisionModel','id_revision');
    }
    public function categoria(){
        return $this->belongsTo('App\CategoryModel','id_categoria');
    }
}
