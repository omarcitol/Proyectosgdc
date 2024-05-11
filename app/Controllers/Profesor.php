<?php

namespace App\Controllers;

class Profesor extends BaseController
{ 
	public function index()
	{
	   $vistas =  view('profesor/inicio');
				 

		 return $vistas; 
	}
     }