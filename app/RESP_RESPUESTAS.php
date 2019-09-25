<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RESP_RESPUESTAS extends Model
{
    //
    protected $table ="RESP_RESPUESTAS";

    protected $primaryKey = "RESP_COD";

    protected $fillable = [
      'RESP_ALT_COD',
      'RESP_USUARIO_id'
    ];

    public function ALT_ALTERNATIVA()
    {
        return $this->hasMany('App\ALT_ALTERNATIVA', '{ALT_COD', 'ALT_ALTERNATIVA');
    }

    public function User()
    {
        return $this->hasOne('App\User', '{id', 'User');
    }

}
