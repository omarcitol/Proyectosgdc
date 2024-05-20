<?php

namespace App\Controllers;

class Alumnos extends BaseController
{ 
	public function index()
	{
	   $vistas =    view('alumnos/cabecera').
	   				view('alumnos/inicio').
					view('alumnos/pie');

		 return $vistas; 
	}

	public function consultarnotas() 
	{
	   $vistas =    view('alumnos/consultarnotas').
					view('alumnos/cabecera').
					view('alumnos/pie');

		 return $vistas; 
	}
	
	public function prueba2()
	{
	   $vistas =    view('alumnos/prueba2').

					view('alumnos/cabecera').
					view('alumnos/pie');
	}
 }
