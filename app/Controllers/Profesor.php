<?php

namespace App\Controllers;

class Profesor extends BaseController
{ 
	public function index()
	{
		$vistas =  view('profesor/cabecera').
		$vistas =  view('profesor/sidemenu');
	   $vistas =  view('profesor/inicio').
	   $vistas =  view('profesor/pie');
	

		 return $vistas; 
	}

	public function sidemenu()
	{
		
	   $vistas =  view('profesor/sidemenu');

		 return $vistas; 
	}
     }