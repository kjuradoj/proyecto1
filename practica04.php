<html>
  <head>
    <title> Funciones en PHP </title>
  </head>
  <body>
    <?php
      // Crear funciones para factorial potencia
      // con for, while, do y recursivo
      function media_aritmetica($a,$b)
      {
        $media=($a+$b)/2;
        return $media;
      }
      echo media_aritmetica(4,6),"<br/>";
      echo media_aritmetica(3242,524543),"<br/>";
    ?>
  </body>
</html>