<?php

namespace App\Controllers;

class iniciocontrolador extends BaseController
{ 
	public function index()
	{
	   $vistas =  view('minicio/menu').
				  view('minicio/cabecera').
				  view('minicio/inicio').
				  view('minicio/login').
				  view('minicio/pie');

		 return $vistas; 
	}

	public function Informacion(){

		$vistas = view('Informacion/menu').
				  view('Informacion/cabecera'). 
				  view('Informacion/inicio'). 
				  view('Informacion/contenido'). 
				  view('Informacion/pie'); 

		 return $vistas;
 }
	
 	public function login(){

		$vistas = view('login/menu').
			 	  view('login/cabecera'). 
			  	  view('login/inicio'). 
			  	  view('login/contenido'). 
			  	  view('login/pie'); 

	 	return $vistas;
}

	public function contacto(){

		$vistas = view('contacto/menu').
			 	  view('contacto/cabecera'). 
			      view('contacto/inicio'). 
				  view('contacto/contenido'). 
				  view('contacto/pie'); 

	 return $vistas;
}

		 }
