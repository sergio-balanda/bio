<?php

namespace Biosistemas;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $table = 'monitors';
    
    protected $fillable = ['resolucion','conectividad','curvatura','aspect_ratio','brightness','color','descripcion','producto_id','monitor_pulgada'];

}
