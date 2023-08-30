<?php 
$server = 'localhost:4306';
$user = 'root';
$password = '';
$bd = 'agenda_facul';

if ($conn = mysqli_connect($server, $user, $password, $bd)) {
   // echo "Conectado";
} else 
  echo "Não concetado";

?>