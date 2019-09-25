<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PR_PREGUNTA extends Model
{
    //
    protected $table ='PR_PREGUNTA';

    protected $primaryKey = 'PR_COD';

    protected $fillable = [
      'PR_NUM',
      'PR_DETALLE',
      'PR_ENC_COD'

    ];

    public function ENC_ENCUESTA()
    {
        return $this->hasOne('App\ENC_ENCUESTA', '{ENC_COD', 'ENC_ENCUESTA');
    }
}
