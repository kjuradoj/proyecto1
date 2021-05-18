<!-- PHP Basico -->
<html>
  <head>
    <title> Ejemplo 01 Aplicaciones con PHP</title>
  </head>
  <body>
    Parte de HTML normal.
    <br><br>
    <?php
      echo "Parte de PHP <br/>";
      for ($i=10;$i>0;$i=$i-2)
      {
        echo "Linea " . $i . "<br/>";
      }
    ?>
  </body>
</html>