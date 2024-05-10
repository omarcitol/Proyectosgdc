<?php

namespace App\Controllers;

class iniciocontrolador extends BaseController
{ 
	public function index()
	{
	   $vistas =  view('minicio/menu').
				  view('minicio/cabecera').
				  view('minicio/inicio').
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

	public function contacto(){

		$vistas = view('contacto/menu').
			 	  view('contacto/cabecera'). 
			      view('contacto/inicio'). 
				  view('contacto/contenido'). 
				  view('contacto/pie'); 

	 return $vistas;
}

		 }
