<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NOT_NOTICIA extends Model
{
    //

    protected $table ='NOT_NOTICIA';

    protected $primaryKey = 'NOT_COD';

    protected $fillable = [
      'NOT_TITULO',
      'NOT_FECHA',
      'NOT_CUERPO',
      'NOT_ESTADO',
      'NOT_URL_FOTO',
      'NOT_URL_VIDEO',
      'NOT_TN_COD',
      'NOT_COM_COD',
      'NOT_USUARIO_id'

    ];

    public function User()
    {
        return $this->hasOne('App\User', '{id', 'User');
    }

    public function TN_TIPO_NOTICIA()
    {
        return $this->hasOne('App\TN_TIPO_NOTICIA', '{TN_COD', 'TN_TIPO_NOTICIA');
    }

    public function COM_COMUNA()
    {
        return $this->hasOne('App\COM_COMUNA', '{COM_COD', 'COM_COMUNA');
    }



}
