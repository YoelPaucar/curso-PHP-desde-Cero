<?php
//Asi validamos y movemos el archivo
//PARA UN SOLO ARCHIVO 
// if(isset($_FILES['archivo'])){
//     move_uploaded_file(
//         $_FILES['archivo']['tmp_name'],
//         'uploads/' .$_FILES['archivo']['name']);
        

// }
// PARA MULTIPLES ARCHIVOS
if (isset($_FILES['archivo'])) {
    foreach($_FILES['archivo']['name'] as $k => $archivo){
        if(!empty($archivo)){
            move_uploaded_file(
                $_FILES['archivo']['tmp_name'][$k],
                'uploads/' .$archivo
            );
        }
    }
}
var_dump($_FILES);
