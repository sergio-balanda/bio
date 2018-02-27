<?php

namespace Biosistemas\Http\Controllers;

use Illuminate\Http\Request;
use Biosistemas\Http\Requests\MonitorCreateRequest;
use Biosistemas\Http\Requests\MonitorUpdateRequest;
use Biosistemas\Producto;
use Biosistemas\Monitor;
use Biosistemas\Monitor_pulgada;
use Redirect;
use Session;
use DB;

class MonitorController extends Controller
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
            $monitors = DB::table('monitors')
                ->join('productos','monitors.producto_id','productos.id')
                ->where('productos.titulo','like','%'.$query.'%')
                ->select('monitors.*','productos.titulo as producto_titulo')
                ->paginate(6);
        }
        elseif ($request==""){
            $notebooks = DB::table('monitors')
                ->join('productos','monitors.producto_id','productos.id')
                ->where('productos.titulo','like','%'.$query.'%')
                ->select('monitors.*','productos.titulo as producto_titulo')
                ->paginate(6);
        }    
        return view('monitores.index',["monitors"=>$monitors,"searchText"=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $producto_id=$request->get('producto');
        $monitor_pulgadas = Monitor_pulgada::pluck('nombre','id');
        return view('monitores.create',compact('producto_id','monitor_pulgadas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MonitorCreateRequest $request)
    {
        Monitor::create($request->all());        
        Session::flash('message','Monitor registrado correctamente');
        return Redirect::to('home/monitor');
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
        $monitor = Monitor::find($id);
        $monitor_pulgadas = Monitor_pulgada::pluck('nombre','id');
        return view('monitores.edit',['monitor'=>$monitor,'monitor_pulgadas'=>$monitor_pulgadas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MonitorUpdateRequest $request, $id)
    {
        $monitor = Monitor::find($id);
        $monitor->fill($request->all());
        $monitor->save();
        Session::flash('message','Monitor editado correctamente');
        return Redirect::to('/home/monitor');        
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
