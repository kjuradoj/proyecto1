<html>
  <head>
    <title> Operadores Aritmeticos en PHP </title>
  </head>
  <body>
    <?php
      $a = 5;
      $b = 4;      
      echo 'La suma es : ' ,$a + $b, '<br/>';      
      echo 'La resta es : ' ,$a - $b, '<br/>';      
      echo 'La multiplicacion es : ' ,$a * $b, '<br/>';
      echo 'La division es : ' ,$a / $b, '<br/>';
      echo 'El modulo es : ' ,$a % $b, '<br/>'; // Residuo entero  
      echo 'La potencia es : ',$a ^ $b, '<br/>';       
      $a++;
      echo $a,"<br>";
      $b--;
      echo $b,"<br>";      
    ?>
  </body>
</html>