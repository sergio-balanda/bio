<?php

namespace Biosistemas\Http\Controllers;

use Illuminate\Http\Request;
/*
use Biosistemas\Http\Requests\UserCreateRequest;
use Biosistemas\Http\Requests\UserUpdateRequest;
*/
use Biosistemas\Producto;
use Biosistemas\Monitor;
use Biosistemas\Monitor_pulgada;
use Redirect;
use Session;
use DB;

class MonitorController extends Controller
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
    public function create()
    {
        $pulgadas = Monitor_pulgada::pluck('nombre','id');
        return view('monitores.create',compact('pulgadas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('monitores.edit',['monitor'=>$monitor]);
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
