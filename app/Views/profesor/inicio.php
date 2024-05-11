<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panel del Profesor</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f5f5;
}

.topbar {
    background: linear-gradient(to right, #3498db, #2980b9);
    color: #fff;
    padding: 10px;
    text-align: right;
}

.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 40px; /* Height of the topbar */
    left: 0;
    background: linear-gradient(to bottom, #2980b9, #3498db);
    color: #fff;
    padding-top: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px;
    border-bottom: 1px solid #5fa8d3;
}

.sidebar ul li:hover {
    background-color: #2980b9;
}

.content {
    margin-left: 250px;
    padding: 20px;
}

h1 {
    margin-top: 0;
}

.white-text {
    color: #fff;
}

.bold {
    font-weight: bold;
}

</style>
</head>
<body>

<div class="topbar">
    <span class="white-text">Bienvenido Profesor Nombre</span>
</div>

<div class="sidebar">
    <ul>
        <li><a href="#" class="white-text bold">Panel de control</a></li>
        <li><a href="#" class="white-text bold">Registrar Materias</a></li>
        <li><a href="#" class="white-text bold">Añadir notas</a></li>
        <li><a href="#" class="white-text bold">Modificar notas</a></li>
        <li><a href="#" class="white-text bold">Eliminar notas</a></li>
        <li><a href="#" class="white-text bold">Cerrar sesión</a></li>
    </ul>
</div>

<div class="content">
    <h1 class="white-text bold">Bienvenido Profesor Nombre</h1>
    <p>Seleccione una opción del menú lateral para comenzar.</p>
</div>

</body>
</html>