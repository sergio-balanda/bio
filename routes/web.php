<?php

Route::bind('producto',function($nombre){
   return Biosistemas\Producto::where('nombre',$nombre)->first(); 
});

/*--FRONT--*/
Route::get('/','FrontController@index');
Route::get('/notebooks','FrontController@notebooks');
Route::get('/monitores','FrontController@monitores');
Route::get('/proyectores','FrontController@proyectores');
Route::get('/contacto','FrontController@contacto');

Route::get('producto/{nombre}',[
   'as'=>'producto-detalle',
    'uses'=>'FrontController@show'
]);

/*--Carrito--*/
Route::get('/cart', 'CartController@index');

Route::get('cart/add/{producto}',[
    'as'=>'cart-add',
    'uses'=>'CartController@add'
]);

Route::get('cart/delete/{producto}',[
    'as'=>'cart-delete',
    'uses'=>'CartController@delete'
]);

Route::get('cart/create',[
    'as'=>'cart-create',
    'uses'=>'CartController@create'
]);


Route::post('cart/store', 'CartController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//USUARIO
Route::resource('usuario', 'UsuarioController');
//Producto
Route::resource('producto', 'ProductoController');
//Notebook
Route::resource('notebook', 'NotebookController');
