<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
    //
    protected $table="contratos";

    protected $primaryKey='idnum_contrato';

    public $timestamps = false;

    public function getIdAttribute()
    {
        $numero=0;
        for ($i = 10; $i <= 100; $i++) {
             $numero+=0;

        }
        return $numero;
    }
}
