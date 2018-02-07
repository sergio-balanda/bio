<?php

namespace Biosistemas\Http\Controllers;

use Illuminate\Http\Request;
/*
use Biosistemas\Http\Requests\UserCreateRequest;
use Biosistemas\Http\Requests\UserUpdateRequest;
*/
use Biosistemas\Producto;
use Biosistemas\Notebook;
use Redirect;
use Session;
use DB;

class NotebookController extends Controller
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
            $notebooks = DB::table('notebooks')
                ->join('productos','notebooks.producto_id','productos.id')
                ->where('productos.titulo','like','%'.$query.'%')
                ->select('notebooks.*','productos.titulo as producto_titulo')
                ->paginate(6);
        }
        elseif ($request==""){
            $notebooks = DB::table('notebooks')
                ->join('productos','notebooks.producto_id','productos.id')
                ->where('productos.titulo','like','%'.$query.'%')
                ->select('*','productos.titulo as producto_titulo')
                ->paginate(6);
        }    
        return view('notebooks.index',["notebooks"=>$notebooks,"searchText"=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('notebooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notebook = Notebook::create($request->all());        
        Session::flash('message','Notebook registrada correctamente');
        return Redirect::to('/notebook');
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
        $notebook = Notebook::find($id);
        return view('notebooks.edit',['notebook'=>$notebook]);
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
