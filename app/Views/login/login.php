<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="<?php echo base_url()?>/public/css/bootstrapcss/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url()?>/public/js/bootstrapjs/bootstrap.bundle.min.js"></script>


</head>
<body class="m-0 vh-100 row justify-content-center align-item-center">

<style>

body{ 
    background-color: #87CEEB;
}

</style>

            

            <div class="row">
                <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 pt-5">

                        <div class="card text-white bg-primary">
                        
                       <div class="card-header text-center"><img src="<?php echo base_url()?>/public/img/logoumc2.png" height="200" width="300 "img fluid"  alt="Imagen login">
                       <h2>LOGIN UMC</h2></div>
    
                       <div class="card-body">
                                       
                <form>
                        <div class="mb-3">
                            <label for="email">Ingresa tu correo electronico:</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com">
                            <small class="form-text text-white">Ingresa tu correo porfavor.</small>
                        </div>
                        <div class="mb-3">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control" id="password" placeholder="Contraseña">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Guardar sesión</label>
                        </div>
                        <button type="submit" class="btn btn-dark">Ingresar</button>
                        <a href="<?php echo base_url()?>/register" class="btn btn-dark">Registrarse</button>

                    </form>
                        
                </div>        
            </div>
         </div>




    <script src="<?php echo base_url()?>/public/js/bootstrapjs/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/public/js/popper.min.js" ></script>

</body>
</html>