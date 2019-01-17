<?php
 
 session_start();
 //session
 //$_SESSION['frutas']=['platano','fresa'];
 
 //cookie
 setcookie("frutas", //KEY
      "piña,fresa.coco", //VALUE
         time()+60 //tiempo de vida
);
?>