<?php
  $mysql = new mysqli('localhost', 'root', 'admin', 'blog');
  $mysql->set_charset('utf8');
  
  if($mysql == FALSE)
      echo 'Banco conectado';
?>