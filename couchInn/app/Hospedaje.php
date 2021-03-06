<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Hospedaje extends Model implements SluggableInterface
{
    use SluggableTrait;


    protected  $table ="hospedaje";
    protected  $fillable =['provincia','ciudad','calle','numero',
        'capacidad','descripcion','wifi','cable','baños','habitaciones'
        ,'tipo_cama','tipo_habitacion','tipo_hospedaje_id','usuario_id'];

    protected $sluggable = [
        'build_from' => 'provincia',
        'save_to'    => 'slug',
    ];


    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

    public function tipoHospedaje(){
        return $this->belongsTo('App\Tipo_hospedaje');
    }

    public function imagenes (){
        return $this->hasMany('App\Imagen');
    }

    public function denuncias (){
        return $this->hasMany('App\Denuncia');
    }

    public function preguntas (){
        return $this->hasMany('App\Pregunta');
    }

    public function evaluaciones (){
        return $this->hasMany('App\Evaluacion');
    }

    public function reservas (){
        return $this->hasMany('App\Reserva');
    }

    public function disponibilidades (){
        return $this->hasMany('App\Disponibilidad');
    }
}
