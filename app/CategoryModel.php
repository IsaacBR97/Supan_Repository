<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table='category';
    protected $primaryKey = 'id_categoria';
    protected $fillable = ['id_categoria','categoria','descripcion'];
}
