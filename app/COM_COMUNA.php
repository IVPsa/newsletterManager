<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class COM_COMUNA extends Model
{
    //
    protected $table ='COM_COMUNA';

    protected $primaryKey = 'COM_COD';

    protected $fillable = [
      'COM_DES'
    ];
}
