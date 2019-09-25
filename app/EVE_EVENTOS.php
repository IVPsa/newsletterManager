<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EVE_EVENTOS extends Model
{
    //
    protected $table ="EVE_EVENTOS";

    protected $primaryKey = "EVE_COD";

    protected $fillable = [
      'EVE_NOMBRE',
      'EVE_INICIO',
      'EVE_FIN',
      'EVE_LATITUD',
      'EVE_LONGITUD',
      'EVE_DESCRIPCION',
      'EVE_UBICACION',
      'EVE_ESTADO',
      'EVE_URL_FOTO',
      'EVE_URL_VIDEO',
      'EVE_COM_COD',
      'EVE_id',
    ];

    public function User()
    {
        return $this->hasOne('App\User', '{id', 'User');
    }


    public function COM_COMUNA()
    {
        return $this->hasOne('App\COM_COMUNA', '{COM_COD', 'COM_COMUNA');
    }

}
