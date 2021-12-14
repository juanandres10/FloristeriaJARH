<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;

class ContactoController extends Controller
{
    public function store(Request $request){
    	$mensaje = request()->validate([
    		'nombre' => 'required',
    		'correo' => 'required|email',
    		'asunto' => 'required',
    		'contenido' => 'required|min:5'
    	], [
    		"nombre.required" => __('I need your name')
    	]);
    	Mail::to("jruiher1009@g.educaand.es")->send(new MensajeRecibido($mensaje));

    	//return 'Datos validados';
        return back()->with('prueba',"Recibimos tu mensaje, te responderemos en menos de 1 semana.");
    }

}
