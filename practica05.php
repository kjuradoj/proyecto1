<?php
      include("Usuario.php");      
      // Objetos
      $usuario1 = new Usuario; 
      $usuario1->usuario = 'juan'; 
      $usuario1->password = 'juan123'; 
      echo $usuario1->usuario."<br/>"; // juan
      echo $usuario1->password."<br/>";  
      $usuario1->saludar()."<br/>";

      // Varios objetos
      // Varios objetos
      $usuarios = null;
      $usuarios[] = new Usuario;
      $usuarios[] = new Usuario;
      $usuarios[] = new Usuario;
      $usuarios[0]->usuario = "Rodrigo <br/>";
      $usuarios[1]->usuario = "Smith <br/>";
      $usuarios[2]->usuario = 'Astrid <br/>';
      foreach ($usuarios as $usuario) {
        $usuario->saludar() . '<br/>';
      }     
?>