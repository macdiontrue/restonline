<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//=========================Pagina Web========================================
Route::get('/', function () {
    return view('inicial.index');
});
Route::get('/compras', function () {
    return view('cliente.compras');
});

Route::get('/test', function () {
    return view('cliente.test');
});

Route::get('/vermapa',function(){

	 Mapper::map(-25.9710934, 32.5736842, ['marker' => false]);

    $collection = \App\Restaurante::all();

    $collection->each(function($address)
    {
        $content = $address->nome."<br>".$address->endereco;
        Mapper::informationWindow($address->latitude, $address->longitude, $content);
    });

    return view('cliente.mapa',compact('collection'));
});

Route::post('/maps','CategoriaProdutoController@index');

Route::get('/pagamentos', function () {
    return view('cliente.pagamentos');
});
Route::get('/lista', function () {
    return view('cliente.lista');
});
Route::get('/mapa', function () {
    return view('cliente.mapa');
});
Route::get('/', function () {
    return view('inicial.index');
});

Route::get('/pop', function () {
    return view('cliente.localizacao');
});

//=========================cliente===========================================

Route::get('/perfil_cliente', function () {
    return view('cliente.perfil_cliente');
});
Route::get('/form_login_cliente', function () {
    return view('cliente.login_cliente');
});

Route::get('/form_registar_cliente', function () {
    return view('cliente.registar_cliente');
});

Route::get('/form_recuperar_Senha_cliente', function () {
    return view('cliente.recuperar_Senha_cliente');
});

Route::resource('/form_gravar_cliente','ClienteController');
//===========================Restaurante==============================
Route::get('/form_registar_restaurante', function () {
    return view('restaurante.registar_restaurante');
});