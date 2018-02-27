<?php

namespace Biosistemas\Http\Controllers;

use Illuminate\Http\Request;
use Biosistemas\Http\Requests\ProductoCreateRequest;
use Biosistemas\Http\Requests\ProductoUpdateRequest;
use Biosistemas\Producto;
use Biosistemas\Marca;
use Biosistemas\Notebook;
use Biosistemas\Monitor;
use Biosistemas\Proyector;
use Redirect;
use Session;
use DB;
use Storage;

class ArticuloController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
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
                ->orderBy('id','desc')
                ->paginate(6);
        }
        elseif ($request==""){
            $productos = DB::table('productos')
                ->orderBy('id','desc')
                ->paginate(6);
        }    
        return view('articulos.index',["productos"=>$productos,"searchText"=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::orderBy('id')->pluck('nombre','id');
        return view('articulos.create',compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoCreateRequest $request)
    {
        $tipo = $request->get('tipo');
        $producto = Producto::create($request->all());
        $producto_id = $producto->id;
        Session::flash('message','Producto registrado correctamente');
        switch($tipo){
            case ($tipo=="proyector"):
                return redirect()->action(
                    'ProyectorController@create', ['producto'=>$producto_id]
                );
                break;
            case ($tipo=="monitor"):
                return redirect()->action(
                    'MonitorController@create', ['producto'=>$producto_id]
                );
                break;
            case ($tipo=="notebook"):
                return redirect()->action(
                    'NotebookController@create', ['producto'=>$producto_id]
                );
                break;
            default:
                return Redirect::to('/home/articulo');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marcas = Marca::orderBy('id')->pluck('nombre','id');
        $producto = Producto::find($id);
        return view('articulos.edit',['producto'=>$producto,'marcas'=>$marcas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoUpdateRequest $request, $id)
    {
        $producto = Producto::find($id);
        $producto->fill($request->all());
        $producto->save();
        Session::flash('message','Producto editado correctamente');
        return Redirect::to('/home/articulo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $tipo = $producto->tipo;
        
        if($tipo=='notebook'){
            $notebooks = DB::table('notebooks')
                ->where('notebooks.producto_id',$id)
                ->delete();
        }elseif($tipo=='monitor'){
            $monitores = DB::table('monitors')
                ->where('monitors.producto_id',$id)
                ->delete();
        }else{
            $proyectors = DB::table('proyectors')
                ->where('proyectors.producto_id',$id)
                ->delete();
        }

        Storage::delete($producto->imagen);
        Storage::delete($producto->imagen1);
        Storage::delete($producto->imagen2);
        Storage::delete($producto->imagen3);
        Storage::delete($producto->imagen4);
        Storage::delete($producto->imagen5);
		$producto->destroy($id);
		Session::flash('message','Producto Eliminado Correctamente');
        return Redirect::to('/home/articulo');
    }

}
