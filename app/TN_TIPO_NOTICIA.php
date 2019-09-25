<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TN_TIPO_NOTICIA extends Model
{
    //

    protected $table ="TN_TIPO_NOTICIA";

    protected $primaryKey = "TN_COD";

    protected $fillable = [
      'TN_DESCRIPCION'
    ];
}
