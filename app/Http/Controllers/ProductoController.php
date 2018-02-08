<?php

namespace Biosistemas\Http\Controllers;

use Illuminate\Http\Request;
/*
use Biosistemas\Http\Requests\UserCreateRequest;
use Biosistemas\Http\Requests\UserUpdateRequest;
*/
use Biosistemas\Producto;
use Biosistemas\Marca;
use Biosistemas\Notebook;
use Biosistemas\Processor;
use Biosistemas\Monitor;
use Biosistemas\Proyector;
use Biosistemas\Pulgadas_notebook;
use Biosistemas\Monitor_pulgada;
use Redirect;
use Session;
use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if($request!=""){
            $query=trim($request->get('searchText'));
            $productos = DB::table('productos')
                ->where('titulo','like','%'.$query.'%')
                ->paginate(6);
        }
        elseif ($request==""){
            $productos = DB::table('productos')
                ->paginate(6);
        }    
        //return view('usuario.index',compact('users','query'));
        return view('productos.index',["productos"=>$productos,"searchText"=>$query]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::pluck('nombre','id');
        return view('productos.create',compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = $request->get('tipo');
        $producto = Producto::create($request->all());
        $producto_id = $producto->id;
        Session::flash('message','Producto registrado correctamente');

        switch($tipo){
            case ($tipo=="proyector"):
                return view('proyectores.create',compact('producto_id'));
                break;
            case ($tipo=="monitor"):
                $monitor_pulgadas = Monitor_pulgada::pluck('nombre','id');
                //Session::flash('message','Producto registrado correctamente');
                return view('monitores.create',compact('producto_id','monitor_pulgadas'));
                break;
            case ($tipo=="notebook"):
                $processors = Processor::pluck('nombre','id');
                $pulgadas_notebooks = Pulgadas_notebook::pluck('nombre','id');
                //Session::flash('message','Producto registrado correctamente');
                return view('notebooks.create',compact('producto_id','processors','pulgadas_notebooks'));
                break;
            default:
                return Redirect::to('/productos');
                break;
        }
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        print_r($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
}
