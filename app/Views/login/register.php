<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href="<?php echo base_url()?>/public/css/bootstrapcss/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            max-width: 800px; /* Ajusta el ancho máximo de la tarjeta según tus necesidades */
            margin: 0 auto; /* Centra la tarjeta horizontalmente en la página */
        }
        .card-header img {
            height: 200px;
            width: 300px;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-12 pt-5">
            <div class="card text-white bg-primary">
                <div class="card-header text-center">
                    <img src="<?php echo base_url()?>/public/img/logoumc2.png" alt="Imagen login">
                    <h2>REGISTRO UMC</h2>
                </div>
                <div class="card-body">
                    <form id="form-register" method="post" action="">
                        <div class="mb-3">
                            <label for="email">Ingresa tu correo electrónico:</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password1" class="form-label">Contraseña:</label>
                            <input type="password" minlength="8" maxlength="25" class="form-control" id="password1" name="password" placeholder="Contraseña" required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Repite tu Contraseña:</label>
                            <input type="password" minlength="8" maxlength="25" class="form-control" id="password2" name="password2" placeholder="Contraseña" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Guardar sesión</label>
                        </div>
                        <button type="submit" class="btn btn-dark">Registrarse</button>
                        <a href="<?php echo base_url()?>/login" class="btn btn-dark">Ingresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url()?>/public/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/public/js/bootstrapjs/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>/public/js/bootstrapjs/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/public/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>/public/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>/public/js/register.js"></script>
</body>
</html>