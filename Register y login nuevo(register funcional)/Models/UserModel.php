<<<<<<< HEAD
<?php

namespace App\Models;

use CodeIgniter\Model;

//Modelo para trabajar con la tabla usuarios

class UserModel extends Model
{
    protected $table = 'users'; //nombre de la tabla
    protected $primarykey = 'id'; //lalve primaria
    protected $allowedFields = ['name', 'surname', 'email', 'password']; //campos que se usaran
}

=======
<?php

namespace App\Models;

use CodeIgniter\Model;

//Modelo para trabajar con la tabla usuarios

class UserModel extends Model
{
    protected $table = 'users'; //nombre de la tabla
    protected $primarykey = 'id'; //lalve primaria
    protected $allowedFields = ['name', 'surname', 'email', 'password']; //campos que se usaran
}

>>>>>>> 09a53085de303669e93c424c267a8d62016d52ff
