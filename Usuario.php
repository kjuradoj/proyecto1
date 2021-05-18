<?php
    class Usuario { 
      // atributos
      public $usuario; 
      public $password; 
      // Metodos
       public function saludar() {
        echo '¡Hola ' . $this->usuario . '!';
       }       
    }
?>