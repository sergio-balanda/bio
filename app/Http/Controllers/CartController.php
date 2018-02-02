<?php

namespace Biosistemas\Http\Controllers;

use Illuminate\Http\Request;
use Biosistemas\Producto;
use Biosistemas\Detalle;


class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart'))\Session::put('cart',array());
    }
    
    public function index()
    {
        $cart=\Session::get('cart');
        $total=$this->total();
        return view('front.cart',compact('cart','total'));
    }
    
    public function add(Producto $producto)
    {
        $cart=\Session::get('cart');
        $producto->cantidad=1;
        $cart[$producto->nombre]=$producto;
        \Session::put('cart',$cart);
        
        return redirect()->action('CartController@index');
    }
    
    public function total()
    {
        $cart=\Session::get('cart');
        $total=0;
        foreach($cart as $item){
            $total+=$item->precio*$item->cantidad;
        }
        return $total;
    }
    
    public function create()
    {
        if(count(\Session::get('cart'))<=0) return redirect()->action('CartController@index');
        $producto= Producto::pluck('nombre', 'id');
        return view('front.form.create',compact('producto'));
       
    }
    
    public function store(Request $request)
    {
        $datos=([
            'nombre_completo'=>$request['nombre_completo'],
            'telefono'=>$request['telefono'],
            'email'=>$request['email'],
            'producto_id'=>$request['producto_id']  
        ]);
       
        
        $cart=\Session::get('cart');
        $total=$this->total();
        
        return view('front.detalle',compact('cart','total','datos'));
    }
    
    public function delete(Producto $producto)
    {
        $cart=\Session::get('cart');
        unset($cart[$producto->nombre]);
        \Session::put('cart',$cart);
        return redirect()->action('CartController@index');
    }

}
