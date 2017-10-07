<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    //inyectar el metodo request a traves de un constructor

    // public function __construct(Request $request){

    // 	$this->request = $request;
    // }

    public function home(){

    	return view('home');
    }

    public function contact(){

    	return view('contactos');
    }

    public function mensaje(CreateMessageRequest $request){

    	$data = $request->all();

    	return back()->with('info', 'Tu mensaje ha sido enviado correctamente');
    }

	public function saludo($nombre = "Invitado"){

		$html = "<h2>Contenido html</h2>"; //ingresado mediante un formulario

		$script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>"; //ingresado mediante un formulario

		$consolas = ["Play Station 4", "Xbox One", "Wii U"];

	   	return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
	}

}
