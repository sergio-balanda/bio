<?php

namespace Biosistemas;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Producto extends Model
{
    protected $table = 'productos';
    
    protected $fillable = ['titulo','nombre','tipo','precio','marca_id','link','imagen','imagen1','imagen2','imagen3','imagen4'];
    
    public function setImagenAttribute($imagen){
        $this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
        $name=Carbon::now()->second.$imagen->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($imagen));
    }
    
     public function setImagen1Attribute($imagen1){
        $this->attributes['imagen1'] = Carbon::now()->second.$imagen1->getClientOriginalName();
        $name=Carbon::now()->second.$imagen1->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($imagen1));
    }
    
     public function setImagen2Attribute($imagen2){
        $this->attributes['imagen2'] = Carbon::now()->second.$imagen2->getClientOriginalName();
        $name=Carbon::now()->second.$imagen2->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($imagen2));
    }
    
    public function setImagen3Attribute($imagen3){
        $this->attributes['imagen3'] = Carbon::now()->second.$imagen3->getClientOriginalName();
        $name=Carbon::now()->second.$imagen3->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($imagen3));
    }
    
    public function setImagen4Attribute($imagen4){
        $this->attributes['imagen4'] = Carbon::now()->second.$imagen4->getClientOriginalName();
        $name=Carbon::now()->second.$imagen4->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($imagen4));
    }
}
