<?php

//Definimos la funcion//

   function saludar($nombre){
       echo "Holi, $nombre" ;
   }
 //Llamamos a la funcion//
 
  saludar("Harry");

  function sumar($a, $b){
    return $a + $b;

  }

  echo '<hr>';

  //Llamar a la funcion y mostrar el resultado 
      //voy a guardar el resultado en una variable del return en una funcion 
      // que suma a y b //
   $resultado = sumar(5, 3);
   echo "La suma es: $resultado";
   
   echo '<hr>';
//

   function saludarUsuario($nombre = "Invitado"){
     echo  "Hola, $nombre";
   }

   saludarUsuario();
   