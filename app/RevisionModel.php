<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RevisionModel extends Model
{
    protected $table = 'revision';
    protected $primaryKey = 'id_revision';
    protected $fillable = ['id_revision','revisado'];

}
