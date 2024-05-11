<?php

namespace App\Controllers;

class Alumnos extends BaseController
{ 
	public function index()
	{
	   $vistas =  view('alumnos/inicio');
				 

		 return $vistas; 
	}
     }