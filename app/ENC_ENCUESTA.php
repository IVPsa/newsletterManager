<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ENC_ENCUESTA extends Model
{
    //

    protected $table ='ENC_ENCUESTA';

    protected $primaryKey = 'ENC_COD';

    protected $fillable = [
      'ENC_ESTADO',
      'ENC_NOMBRE',
      'ENC_FECHA'
    ];
}
