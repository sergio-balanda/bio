<?php

namespace Biosistemas\Http\Controllers;

use Illuminate\Http\Request;
use Biosistemas\Http\Requests\NotebookCreateRequest;
use Biosistemas\Http\Requests\NotebookUpdateRequest;
use Biosistemas\Producto;
use Biosistemas\Notebook;
use Biosistemas\Processor;
use Biosistemas\Pulgadas_notebook;
use Redirect;
use Session;
use DB;

class NotebookController extends Controller
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
        $processors = Processor::pluck('nombre','id');
        $pulgadas_notebooks = Pulgadas_notebook::pluck('nombre','id');
        $producto_id=$request->get('producto');
        return view('notebooks.create',compact('processors','pulgadas_notebooks','producto_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotebookCreateRequest $request)
    {
        $notebook = Notebook::create($request->all());        
        Session::flash('message','Notebook registrada correctamente');
        return Redirect::to('home/notebook');
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
        $processors = Processor::pluck('nombre','id');
        $pulgadas_notebooks = Pulgadas_notebook::pluck('nombre','id');
        return view('notebooks.edit',['notebook'=>$notebook,'processors'=>$processors,'pulgadas_notebooks'=>$pulgadas_notebooks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NotebookUpdateRequest $request, $id)
    {
        $notebook = Notebook::find($id);
        $notebook->fill($request->all());
        $notebook->save();
        Session::flash('message','Notebook editada correctamente');
        return Redirect::to('/home/notebook');    
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
