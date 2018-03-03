<?php

namespace Biosistemas\Http\Controllers;
use Biosistemas\Producto;
use Biosistemas\Notebook;
use Biosistemas\Pulgadas_notebooks;
use Biosistemas\Processor;
use DB;
    
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        //FALTA ORDENAR POR ULTIMOS. Y el select con los datos justos
        $productos = DB::table('productos')
        ->take(4)
        ->orderBy('productos.created_at', 'DESC')
        ->select('productos.nombre','productos.titulo','productos.imagen','productos.precio')    
        ->get();
        
        return view('index',compact('productos'));
    }
    
    public function notebooks(Request $request)
    {   
        $ordenarPor = $request->get('precio');
        $marca = $request->get('marca');
        $procesador = $request->get('procesador');
        $pantalla = $request->get('pulgada');

        switch ($request){
            case ($ordenarPor==null && $marca==null && $procesador==null && $pantalla==null):  
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->orderBy('productos.created_at', 'DESC')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;
            //MARCA
            case ($ordenarPor=="menor" && $marca != ""):            
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->join('marcas','marcas.id','productos.marca_id')      
                ->where('marcas.nombre',$marca)    
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;
            case ($ordenarPor=="mayor" && $marca != ""):            
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->join('marcas','marcas.id','productos.marca_id')      
                ->where('marcas.nombre',$marca)    
                ->orderBy('productos.precio', 'desc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;
            /*PROCESADOR*/    
            case ($ordenarPor=="menor" && $procesador != ""):            
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->where('processors.nombre',$procesador)    
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;
            case ($ordenarPor=="mayor" && $procesador != ""):            
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->where('processors.nombre',$procesador)     
                ->orderBy('productos.precio', 'desc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;    
            //PANTALLA
             case ($ordenarPor=="menor" && $pantalla != ""):            
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->where('pulgadas_notebooks.nombre',$pantalla)    
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;
            case ($ordenarPor=="mayor" && $pantalla != ""):            
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->where('pulgadas_notebooks.nombre',$pantalla)     
                ->orderBy('productos.precio', 'desc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;
            //MENOR Y MAYOR    
            case ($ordenarPor=="menor"):            
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')  
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;  
            case ($ordenarPor=="mayor"):            
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id') 
                ->orderBy('productos.precio', 'desc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;  
            //NULOS    
            case ($ordenarPor==null && $marca != ""):            
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->join('marcas','marcas.id','productos.marca_id')      
                ->where('marcas.nombre',$marca)    
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);    
                break;
            case ($ordenarPor==null && $procesador != ""):  
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->where('processors.nombre',$procesador) 
                ->orderBy('productos.created_at', 'DESC')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;
            case ($ordenarPor==null && $pantalla != ""):  
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->where('pulgadas_notebooks.nombre',$pantalla) 
                ->orderBy('productos.created_at', 'DESC')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;    
            default:  
                $notebooks = DB::table('productos')
                ->join('notebooks','notebooks.producto_id','productos.id')
                ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
                ->join('processors','processors.id','notebooks.processor_id')
                ->orderBy('productos.created_at', 'desc')
                ->select('*','productos.nombre as notebook_nombre')->paginate(15);
                break;
        }
              
        //MENU LATERAL
        $marcas = DB::table('productos')
            ->join('marcas','marcas.id','productos.marca_id')
            ->select('marcas.nombre',DB::raw('COUNT(productos.marca_id) as cantidad'))
            ->where('productos.tipo','notebook')
            ->groupBy('productos.marca_id')
            ->get();
        
        $procesadores = DB::table('productos')
            ->join('notebooks','notebooks.producto_id','productos.id')
            ->join('processors','processors.id','notebooks.processor_id')
            ->select('processors.nombre',DB::raw('COUNT(notebooks.processor_id) as cantidad'))
            ->where('productos.tipo','notebook')
            ->groupBy('notebooks.processor_id')
            ->get();
        
        $pulgadas = DB::table('productos')
            ->join('notebooks','notebooks.producto_id','productos.id')
            ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
            ->select('pulgadas_notebooks.nombre',DB::raw('COUNT(notebooks.pulgada_id) as cantidad'))
            ->where('productos.tipo','notebook')
            ->groupBy('notebooks.pulgada_id')
            ->get();
        
        
        return view('front.notebooks',compact('notebooks','marcas','ordenarPor','procesadores','pulgadas'));    
 
    }
    
     public function monitores(Request $request)
    {
        $ordenarPor = $request->get('precio');
        $marca = $request->get('marca');
        $pantalla = $request->get('pulgada'); 
         
        //LATERAL 
        $marcas = DB::table('productos')
            ->join('marcas','marcas.id','productos.marca_id')
            ->select('marcas.nombre',DB::raw('COUNT(productos.marca_id) as cantidad'))
            ->where('productos.tipo','monitor')
            ->groupBy('productos.marca_id')
            ->get();
        $pulgadas = DB::table('productos')
            ->join('monitors','monitors.producto_id','productos.id')
            ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
            ->select('monitor_pulgadas.nombre',DB::raw('COUNT(monitors.monitor_pulgada) as cantidad'))
            ->where('productos.tipo','monitor')
            ->groupBy('monitors.monitor_pulgada')
            ->get(); 
        
        switch ($request){
            case ($ordenarPor==null && $marca==null && $pantalla==null): 
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
                ->orderBy('productos.created_at', 'DESC')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15);
                break;   
            //MARCA    
            case ($ordenarPor=="menor" && $marca!= ""): 
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
                ->join('marcas','marcas.id','productos.marca_id')
                ->where('marcas.nombre',$marca)    
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15);
                break;    
            case ($ordenarPor=="mayor" && $marca!= ""): 
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
                ->join('marcas','marcas.id','productos.marca_id')
                ->where('marcas.nombre',$marca)    
                ->orderBy('productos.precio', 'desc')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15);
                break;    
            //PANTALLA
             case ($ordenarPor=="menor" && $pantalla != ""):            
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
                ->where('monitor_pulgadas.nombre',$pantalla)    
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15);
                break;
            case ($ordenarPor=="mayor" && $pantalla != ""):            
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
                ->where('monitor_pulgadas.nombre',$pantalla)     
                ->orderBy('productos.precio', 'desc')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15);
                break;
                
            //MENOR Y MAYOR    
            case ($ordenarPor=="menor"):            
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15); 
                break;
            case ($ordenarPor=="mayor"):            
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')  
                ->orderBy('productos.precio', 'desc')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15);     
                break;
          
            //NULOS    
            case ($ordenarPor==null && $marca != ""):            
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
                ->join('marcas','marcas.id','productos.marca_id')   
                ->where('marcas.nombre',$marca)    
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15);
                break;    
            case ($ordenarPor==null && $pantalla != ""):            
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')   
                ->where('monitor_pulgadas.nombre',$pantalla)    
                ->orderBy('productos.precio', 'asc')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15);
                break;       
    
            default:  
                $monitores = DB::table('productos')
                ->join('monitors','monitors.producto_id','productos.id')
                ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
                ->orderBy('productos.created_at', 'DESC')
                ->select('*','productos.nombre AS monitor_nombre','monitor_pulgadas.nombre AS tamaño')->paginate(15);
                break;   
        }
        return view('front.monitores',compact('marcas','monitores','pulgadas','ordenarPor'));    
    }
    
    public function proyectores()
    {
        return view('front.proyectores');    
    }
    
     public function contacto()
    {
        return view('front.contacto');    
    }
    
    public function show($nombre)
    {
        $productos = Producto::where('nombre',$nombre)->first();
        
        
        $notebooks = DB::table('productos')
            ->join('notebooks','notebooks.producto_id','productos.id')
            ->join('pulgadas_notebooks','pulgadas_notebooks.id','notebooks.pulgada_id')
            ->join('processors','processors.id','notebooks.processor_id')
            ->select('productos.*','notebooks.*', 'pulgadas_notebooks.nombre AS pulgada', 'processors.nombre AS processor')
            ->where('productos.nombre', $nombre)->first();
        
        $monitors = DB::table('productos')
            ->join('monitors','monitors.producto_id','productos.id')
            ->join('marcas','marcas.id','productos.marca_id')
            ->join('monitor_pulgadas','monitor_pulgadas.id','monitors.monitor_pulgada')
            ->select('productos.*','monitors.*','monitor_pulgadas.nombre AS pulgada','marcas.nombre AS marca')
            ->where('productos.nombre', $nombre)->first();
        
        $proyectors = DB::table('productos')
            ->join('proyectors','proyectors.producto_id','productos.id')
            ->join('marcas','marcas.id','productos.marca_id')
            ->select('productos.*','proyectors.*','marcas.nombre AS marca')
            ->where('productos.nombre', $nombre)->first();
        
        return view('front.producto-detalle',compact('productos','notebooks','monitors','proyectors'));  
    }
}//fin
