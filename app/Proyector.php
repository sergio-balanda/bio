<?php

namespace Biosistemas;

use Illuminate\Database\Eloquent\Model;

class Proyector extends Model
{
    protected $table = 'proyectors';
    
    protected $fillable = ['lumenes','lente','duracion','conectividad','descripcion','3d','contraste','producto_id'];
}
