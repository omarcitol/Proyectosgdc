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
    $vistas =  view('login/register');

    return $vistas;

     }
}
