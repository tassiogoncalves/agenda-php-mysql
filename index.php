<?php  
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode 
simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação 
de fazer um login, com isso se ele não estiver feito o login não será 
criado a session, então ao verificar que a session não existe a página 
redireciona o mesmo para a index.php. */
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  unset($_SESSION['user']);
  header('location:login.php');
}

$logado = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="PT-Br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agenda Telefônica</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS PERSONALIZADO -->
  <link href="css/style.css" rel="stylesheet">
  
</head>
<?php
include "config.php";

?>

<body>

  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Agenda APS</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php?page=">Início</a></li>
          <li><a href="index.php?page=form_contato">Cadastrar</a></li>
          <li><a href="index.php?page=listar_contatos&contato=">Listar</a></li>
		  <?php 
			if ($_SESSION['acl'] == 1){
				echo "<li><a href='index.php?page=adicionar_usuario'>Adicionar Usuário</a></li>";
			}
		  ?>
          <li><a href="logout.php?sair=logout">Sair</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <form class="navbar-form navbar-left" role="search" name="busca" action="index.php">
              <div class="form-group">
                <input type="hidden" name="page" value="listar_contatos" />          
                <input type="text" name="contato" class="form-control busca" autocomplete="off" placeholder="Buscar (Nome)">
              </div>
              <button type="submit" class="btn btn-default">Buscar</button>
            </form>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <?php 
      $page='';
      if( empty($_REQUEST['page'])){  
        ?>
        <div class="jumbotron">
         <h2><?php echo "Bem vindo(a) <b>".$logado."</b>" ?></h2>
          <p>Clique em <b>Cadastrar</b> para inserir novos contatos ou em <b>Listar</b> para visualizar os contatos cadastrados.</p>
        </div>
        <?php }else{
          $pagina = $_REQUEST['page'];
          include ($pagina.'.php');
        }
        ?>

      </div> <!-- /container -->

      <?php
      mysqli_close($con);

      ?>
    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
	 <!-- Mask nos campos Telefone e Celular 
		=====================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    
    <script type="text/javascript">
        $(".telefone").mask("(00) 0000-0000");
        $(".celular").mask("(00) 00000-0000");
    </script>
    
	<!-- AutoComplete no campo Buscar 
		=====================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
     <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
     
    <script>
        $(function() {
            $(".busca").autocomplete({
                minLength: 3,
                source: "dao/autoComplete.php",
                
            });
        });
		
    </script>
    </body>
    </html>
