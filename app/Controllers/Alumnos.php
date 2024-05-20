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
	
	public function notificaciones()
	{
	   $vistas =    
					view('alumnos/cabecera').
					view('alumnos/notificaciones').
					view('alumnos/pie');

				return $vistas;
	}

	public function consultarnotas() 
	{
	   $vistas =   
					view('alumnos/cabecera').
					view('alumnos/consultarnotas').
					view('alumnos/pie');

		 return $vistas; 
	}

	public function Configuracion() 
	{
	   $vistas =   
					view('alumnos/cabecera').
					view('alumnos/configuracion').
					view('alumnos/pie');

		 return $vistas; 
	}
 }
