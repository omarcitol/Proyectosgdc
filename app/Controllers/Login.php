<?php

namespace App\Controllers;


class Login extends BaseController
{

    public function __construct()
    {
        helper('url');
    }
    public function index(): string
    {

        $vistas=    
                    view('login/login');
                    

                    return $vistas;
    }
 
}

