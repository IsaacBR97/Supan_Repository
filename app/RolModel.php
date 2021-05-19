<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolModel extends Model
{
    protected $table ='rols';
    protected $primaryKey = 'id_rol';

    protected $fillable = ['id_rol','rol'];

}
