<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Alumnos</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            background-color: #001f3f; /* Azul marino */
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .menu {
            display: flex;
            background-color: #333; /* Gris oscuro */
            color: #fff;
            padding: 10px;
            justify-content: center;
        }

        .menu-item {
            margin-right: 20px;
        }

        .menu-item a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .sidebar {
            width: 250px;
            background-color: #001f3f; /* Azul marino */
            color: #fff;
            padding: 20px;
            flex: 1;
        }

        .content {
            flex: 2;
            padding: 20px;
        }

        .card-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card {
            background-color: #f0f0f0; /* Color de fondo de la carta */
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .card h2 {
            color: #001f3f; /* Azul marino */
        }

        .card p {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Bienvenido, Nombre del Alumno</h1>
    </div>
    <div class="menu">
        <div class="menu-item">
            <a href="#">Panel de control</a>
        </div>
        <div class="menu-item">
            <a href="#">Carrera</a>
        </div>
        <div class="menu-item">
            <a href="#">Ver Materias</a>
        </div>
        <div class="menu-item">
            <a href="#">Consultar Notas</a>
        </div>
        <div class="menu-item">
            <a href="#">Cerrar Sesión</a>
        </div>
    </div>
    <div class="sidebar">
        <!-- Contenido del sidebar -->
    </div>
    <div class="content">
        <div class="card-container">
            <div class="card">
                <h2>Carta 1</h2>
                <p>Contenido de la Carta 1</p>
            </div>
            <div class="card">
                <h2>Carta 2</h2>
                <p>Contenido de la Carta 2</p>
            </div>
        </div>
    </div>
</body>
</html>