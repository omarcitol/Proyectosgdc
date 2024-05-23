<?php

namespace App\Controllers;


class Register extends BaseController
{

    public function __construct()
    {
        helper('url');
    }
    public function index(): string
 
 { 
    $vistas =  
               view('login/register');
               
    return $vistas;

     }

    public function guardar()
     {
        $correo = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $password2 = $this->request->getPost('password2');

        var_dump($password2,$password,$correo);
     }
}
