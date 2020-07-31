<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
   public $incrementing = false;
   protected $primaryKey= 'carne';
   /*Colocamos tipo protegidos a todos los atributos*/
   protected $fillabel=['carne','nombres','apellidos','edad','sexo_id','codigo','dui','direccion','municipio_id','departamento_id','email','telefono,area'];

   public function getRouteKeyName(){
   		return 'carne';
   }


   public function carrera(){
   	return $this->belongsTo(Carrera::class,'codigo', 'id');
   }

   public function sexo(){
      return $this->belongsTo(Sexo::class, 'sexo_id', 'id');
   }

   public function municipio(){
      return $this->belongsTo(Municipio::class, 'municipio_id', 'id');
   }

   public function departamento(){
      return $this->belongsTo(Departamento::class, 'departamento_id', 'id');
   }
}
