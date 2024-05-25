<<<<<<< HEAD
<?php 

//helper para errores en los campos

function display_error($validation, $field){
if($validation->hasError($field)){

    return $validation->getError($field);
}else{

    return false;
}


}


=======
<?php 

//helper para errores en los campos

function display_error($validation, $field){
if($validation->hasError($field)){

    return $validation->getError($field);
}else{

    return false;
}


}


>>>>>>> 09a53085de303669e93c424c267a8d62016d52ff
?>