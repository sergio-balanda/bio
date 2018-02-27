<?php

namespace Biosistemas\Http\Controllers;

use Illuminate\Http\Request;
use Biosistemas\Http\Requests\UserCreateRequest;
use Biosistemas\Http\Requests\UserUpdateRequest;
use Biosistemas\User;
use Redirect;
use Session;
use DB;

class UsuarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
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
            $users = DB::table('users')
                ->where('id', '<>', 1)
                ->where('active', '=', 'true')
                ->where('name','like','%'.$query.'%')
                ->orWhere('email','like','%'.$query.'%')
                ->where('id', '<>', 1)
                ->where('active', '=', 'true')
                ->paginate(6);
        }
        elseif ($request==""){
            $users = DB::table('users')
                ->where('id', '<>', 1)
                ->where('active', '=', 'true')
                ->paginate(6);
        }    
        //return view('usuario.index',compact('users','query'));
        return view('usuario.index',["users"=>$users,"searchText"=>$query]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            //se encripta en el modelo
            'password'=>$request['password'],
            'type'=>$request['type'],
        ]);
        Session::flash('message','Usuario registrado correctamente');
        return Redirect::to('home/usuario');
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
        $user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario editado correctamente');
        return Redirect::to('/usuario');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->active = 'false';
        $user->save();
        Session::flash('message','Usuario eliminado correctamente');
        return Redirect::to('home/usuario');
    }
}
