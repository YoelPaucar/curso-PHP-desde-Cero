<?php
session_start();
unset($_SESSION['frutas']);

//session_destroy(); //DESTRUYE TODA LAS SECIONES

setcookie("frutas", //KEY
      null, //VALUE
         time()-1 //tiempo de vida
);
?>