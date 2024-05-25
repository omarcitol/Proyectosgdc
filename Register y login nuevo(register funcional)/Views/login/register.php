<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo base_url()?>/public/css/bootstrapcss/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url()?>/public/js/bootstrapjs/bootstrap.bundle.min.js"></script>

    <style>

        body{
         
         background-color: #0cbccc;

        }

        .card-body {
            box-shadow: 3px 4px 41px -1px rgba(0,0,0,0.55);

        }

    </style>

</head>
<body class="m-0 vh-100 row justify-content-center align-item-center">

    <section>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8"></div>
            <div class="card">
                <div class="card-body">

                    <form action="<?php echo base_url().'save' ?>" method="post">

                        <?= csrf_field(); ?>
                        <?php  if(!empty(session()->getFlashdata('fail'))) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>    
                        
                        <?php  if(!empty(session()->getFlashdata('success'))) : ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                        <?php endif ?>    

                        <div class="text-center mt-2">
                        <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" id="" class="form-control my-4 py-2" placeholder="Nombre" value="<?= set_value('name'); ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : ''?></span>
                        </div>
                        <div>
                            <input type="text" name="surname" id="" class="form-control my-4 py-2" placeholder="Apellido" value="<?= set_value('surname'); ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'surname') : ''?></span>
                        </div>
                        <div>
                            <input type="text" name="email" id="" class="form-control my-4 py-2" placeholder="Correo" value="<?= set_value('email'); ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : ''?></span>
                        </div>
                        <div>
                        <input type="password" name="password" id="" class="form-control my-4 py-2" placeholder="Contraseña">
                        
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : ''?></span>
                        </div>

                        <div>
                        <input type="password" name="cpassword" id="" class="form-control my-4 py-2" placeholder="Confirmar Contraseña">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : ''?></span>
                        </div>

                       <div class="text-center mt-3">

                       <button class="btn btn-primary" type="submit">Registrarse</button>
                       <a href="<?php echo base_url().'login' ?>" class="nav-link">¿Ya tienes una cuenta?, ¡ingresa!</a>

                       </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    </section>


    <script src="<?php echo base_url()?>/public/js/bootstrapjs/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/public/js/popper.min.js" ></script>

</body>
</html>