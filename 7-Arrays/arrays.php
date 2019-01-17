<?php 
 $frutas =[
     'platano',
     'fresa',
     'papaya'
 ];

 echo "$frutas[0]";
/*Agregar mas valores alos Arrays*/
//$frutas[3]='uva';  agrega al indice 3
$frutas[]='uva'; // esta agrega al indice siguiente sin especificarla

 echo "<br>";

 $instrumentos =[
     'fender'=> 'Squier Vide 60',
     'ibanez' => 'RG 370x'
 ];
 echo $instrumentos['ibanez'];

 echo "<br>";

 /* Array Multidimencional*/
 $colegio=[
     'primaria'=> [
         'primer_grado'=>'Eduardo Perez',
         'segundo_grado'=>'Lorena lopez',
         'tercer_grado'=>'Julio Andrade',
         'cuarto_grado'=>'Miguel Villanueva',
         'quinto_grado'=>'Julio Hernandez',
         'sexto_grado'=> 'Andre Sanches'
         
     ],
     'secundaria'=> [
        'primer_grado'=>'Luis Perez',
        'segundo_grado'=>'Alverto lopez',
        'tercer_grado'=>'Sofia Andrade',
        'cuarto_grado'=>'Julio Villanueva',
        'quinto_grado'=>'Andrea Hernandez',
        
    ]
     
 ];
//var_dump($colegio);    
foreach ($colegio as $k => $nivel) {
    echo "<b>$k</b><br>";
    foreach($nivel as $n =>$profesor){
        echo $n.' : '.$profesor.'<br>';
    }
    
}
?>