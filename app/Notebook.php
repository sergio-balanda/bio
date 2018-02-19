<?php

namespace Biosistemas;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $table = 'notebooks';
    
    protected $fillable = ['procesador','disco_rigido','ram','descripcion','descripcionB','video','resolucion','bateria','conectividad','so','color','producto_id','pulgada_id','processor_id','peso'];

}
