<!-- Manejo de Variables -->
<html>
  <head>
    <title> Tipos de Datos </title>
  </head>
  <body>     
    <?php
      $a = 1; // Enteros
      $b = 3.34; // decimales
      $c = "Hola Mundo"; //Cadenas
      $d = false; // Booleanos
      echo $a , "<br/>" , $b , "<br/>" , $c , "<br/>" , $d, "<br/>"; 
      
      // Se genera el mismo resultado que el anterior
      echo $a;
      echo "<br/>";
      echo $b;
      echo "<br/>";
      echo $c; 
      echo "<br/>";
      echo $d; 
      
      // Declaracion de Arreglos
      $nombre = "Ana"; 
      $array = array(1, 2, 3, "casa", $nombre);
 
      // Numero de elementos
      $longitud = count($array);
      echo $longitud . "<br/>"; 
      //Recorro todos los elementos
      for($i=0; $i<$longitud; $i++)
      {
        //saco el valor de cada elemento
        echo $array[$i];
        echo "<br/>";
      }                   
    ?>
  </body>
</html>