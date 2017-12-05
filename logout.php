<?php
	  // Fazer Logout
if($_GET['sair'] == 'logout'){
 session_start();
 unset ( $_SESSION['login']);
 unset ( $_SESSION['senha']);
 session_destroy();
 header("Location: login.php"); 

}
?>