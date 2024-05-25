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

		$vistas = view('Informacion/cabecera'). 
				  view('Informacion/inicio'). 
				  view('Informacion/pie'); 

		 return $vistas;
 }

	public function contacto(){

		$vistas = view('contacto/cabecera'). 
			      view('contacto/inicio'). 
				  view('contacto/pie'); 

	 return $vistas;
}

		 }
