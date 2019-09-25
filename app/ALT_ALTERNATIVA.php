<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ALT_ALTERNATIVA extends Model
{
    //
    protected $table ="ALT_ALTERNATIVA";

    protected $primaryKey = "ALT_COD";

    protected $fillable = [
      'ALT_PR_COD',
      'ALT_DESCRIPCION'
    ];
}
