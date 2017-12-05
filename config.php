<?php
//nome do site
$site = '127.0.0.1/agenda-aps/';

//nome do banco de dados
$nome_banco = "agendaaps";

$con = mysqli_connect("127.0.0.1","root","",$nome_banco);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,$nome_banco);

?>

