<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Authenticatable
{

    protected $table = 'usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nombre', 'email', 'password','apellido','foto','telefono'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hospedajes(){
        return $this->hasMany('App\Hospedaje');
    }

    public function rol(){
        return $this->belongsTo('App\Rol');
    }
}