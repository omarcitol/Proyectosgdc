<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - Sistema de Gestión de Calificaciones</title>
    <link rel="stylesheet" type="text/css" href="sidemenu.css">

    <style>

            header {
                display: flex;
                height: 80px;
                background-color: #3498db;
                justify-content: space-around;
                align-items: center;
                padding: 10px;
            }

        body {
            font-family: sans-serif;
            margin: 0;
            position: relative;
            padding-bottom: 3em;
            min-height: 100vh;
        }

        .logo {
            display: flex;
            max-width: 150px;
            height: 70px;
            position: absolute;
            left: 20px;
            align-items: center;

        }
        .logo img {
            height: 100px;
            margin-right: 10px;
        }
    
       a { 
        text-decoration: none;


       }

       nav a{
        font-weight: 600;
        padding-right: 10px;

       }
    nav a:hover {
        color: white;

    }

    .piepagina { 
        display: flex;
        position: absolute;
        width: 100%;
        bottom: 0;
        background-color: #3498db;
        padding: 1em 0;
      
       
    }

    </style>

</head>
<body>

        <Header> 
            <div class="logo">
                <img src="public/img/logoumc2.png" alt="">
                <h2 class="nombre-universidad">Sistema de Gestion de calificaciones       
                </h2>
            </div>
            
            
            <div>
            <nav>

            <a href="" class="nav-link">Panel de Control</a>
            <a href="" class="nav-link">Consultar Notas</a>
            <a href="" class="nav-link">Perfil</a>
            <a href="" class="nav-link">Cerrar Sesion</a>

            </nav>

            </div>

        </Header>

        
