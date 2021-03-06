<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected  $table ="imagen";
    protected  $fillable =['nombre','hospedaje_id'];

    public function hospedaje(){
        return $this->belongsTo('App\Hospedaje');
    }
}
