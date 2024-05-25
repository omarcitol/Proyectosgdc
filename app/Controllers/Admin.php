<?php

namespace App\Controllers;

class Admin extends BaseController
{ 
	public function index3()
	{
	   $vistas =    view('admin/cabecera').
	   				view('admin/inicio').
					view('admin/pie');

		 return $vistas; 
	}

	public function notificaciones3()
	{
	   $vistas =    view('admin/cabecera').
	   				view('admin/inicio').
					view('admin/pie');

		 return $vistas; 
		  }

	public function alumnos2()
	{
	   $vistas =    view('admin/cabecera').
	   				view('admin/inicio').
					view('admin/pie');

		 return $vistas; 
	}

	public function profesores2()
	{
	   $vistas =    view('admin/cabecera').
	   				view('admin/inicio').
					view('admin/pie');

		 return $vistas; 
	}

	public function configuracion3()
	{
	   $vistas =    view('admin/cabecera').
	   				view('admin/inicio').
					view('admin/pie');

		 return $vistas; 
	}

	public function cerrarsesion3()
	{
	   $vistas =    view('admin/cabecera').
	   				view('admin/inicio').
					view('admin/pie');

		 return $vistas; 
	}
	

}

