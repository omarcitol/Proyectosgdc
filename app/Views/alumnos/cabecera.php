<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    
<style>

html,body   {
    margin: 0;
    height: 100%;
    font-family: 'Ubuntu', sans-serif;
    position: relative;
    padding-bottom: 3em;
    min-height: 100vh;

}

.bg-success {
    --bs-bg-opacity: 1;
    background-color: rgb(25 47 135) !important;
}

.mynav{
    color: #fff;
}

.mynav li a {
    color: #fff;
    text-decoration: none;
    width: 100%;
    display: block;
    border-radius: 5px;
    padding: 8px 5px;
}

.mynav li a.active{
    background: rgba(25, 61, 135);
}

.mynav li a:hover{
    background: rgba(230 235 230); /* Azul claro */
}

.mynav li a i{
    width: 25px;
    text-align: center;
}

.notification-badge{
    background-color: rgba(230 235 230); /* Azul claro */
    float: right;
    color: #222;
    font-size: 14px;
    padding: 0px 8px;
    border-radius: 2px;
 }
    .piepagina {
        background-color: rgba(26 18 76);
        padding: 1em 0;
        position: absolute;
        bottom: 0;
        text-align: center;
        color: #fff;
        width: 100%;
        
    }



</style>

    <div class="container-fluid p-0 d-flex h-100">
        <div id="bdSidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-success text-white offcanvas-md offcanvas-start" style="width: 280px;">
            <a href="#" class="navbar-brand">
                <h5><i class="fa-solid fa-bomb me-2" style="font-size: 28px;"></i>Bienvenido Alumno</h5>
            </a>
            <hr>
            <ul class="mynav nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="index" class="active">
                        <i class="fa-solid fa-wave-square"></i>
                        Panel de control
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="notificaciones" class="">
                        <i class="fa-solid fa-bell"></i>
                        Notificaciones
                        <span class="notification-badge">5</span>
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="consultarnotas" class="">
                        <i class="fa-solid fa-chart-simple"></i>
                        Consultar Notas
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="configuracion" class="">
                        <i class="fa-solid fa-user"></i>
                        Configuraciones
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="cerrarsesion" class="">
                    <i class="fa-sharp fa-solid fa-door-open"></i>
                        Cerrar Sesión
                    </a>
                </li>

                    </a>
                </li>
            </ul>
            <hr>
            <div class="d-flex">
                <img src="public/img/logoumc2.png" class="img-fluid rounded me-2" width="40px" alt="">
                <span>
                    <h6 class="mt-1 mb-0">Nombre Usuario</h6>
                    <small>correo ejemplo: johndoe@remotedev</small>
                </span>
            </div>
        </div>

        <div class="bg-light flex-fill">
            <div class="p-2 d-md-none d-flex text-white bg-success">
                <a href="#" class="text-white" data-bs-toggle="offcanvas" data-bs-target="#bdSidebar">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <span class="ms-3">Panel de control</span>
            </div>
            <div class="p-4">
                <nav style="--bs-breadcrumb-divider:'>';font-size:14px">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fa-solid fa-house"></i></li>
                        <li class="breadcrumb-item">Panel de Control</li>
                        <li class="breadcrumb-item">Consulta de notas</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between">
                    <h5>Informacion</h5>
                    <button class="btn btn-sm btn-light"><i class="fa-solid fa-download"></i>Volver a panel de control</button>
                </div>