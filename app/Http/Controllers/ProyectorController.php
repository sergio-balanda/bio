<?php

namespace Biosistemas\Http\Controllers;

use Illuminate\Http\Request;
/*
use Biosistemas\Http\Requests\UserCreateRequest;
use Biosistemas\Http\Requests\UserUpdateRequest;
*/
use Biosistemas\Producto;
use Biosistemas\Proyector;
use Redirect;
use Session;
use DB;

class ProyectorController extends Controller
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
            $proyectors = DB::table('proyectors')
                ->join('productos','proyectors.producto_id','productos.id')
                ->where('productos.titulo','like','%'.$query.'%')
                ->select('proyectors.*','productos.titulo as producto_titulo')
                ->paginate(6);
        }
        elseif ($request==""){
            $proyectors = DB::table('proyectors')
                ->join('productos','proyectors.producto_id','productos.id')
                ->where('productos.titulo','like','%'.$query.'%')
                ->select('proyectors.*','productos.titulo as producto_titulo')
                ->paginate(6);
        }    
        return view('proyectores.index',["proyectors"=>$proyectors,"searchText"=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $proyector = Proyector::find($id);
        return view('proyectores.edit',['proyector'=>$proyector]);
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
