<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Verfifica se a sessao esta aberta e redireciona para a pagina home ou dashboard
    public function home(){	
        if(!Session::has('login')){
    		return $this->exibirHome();
    	}else{
    		return redirect('cliente_perfil');
    	}
    }

    //Exibe a pagina inicial
    public function exibirHome(){
    	return view('inicial.index');
    }

    //Exibe a pagina de login
    public function form_login(){
    	return view('inicial.login');
    }
}
