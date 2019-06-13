
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

  <!-- CSS LOGIN -->
  <link href="css/login.css?v2=<?php echo time();?>" rel="stylesheet">

  
</head>
<?php
include "config.php";

?>

<body>

  <div class="container">
    <div align="center">
      <img src="imagens/cadeado.png" align="center">
    </div>
    <form class="form-signin" method="POST" action="dao/verifica_login.php">
      <h2 class="form-signin-heading" align="center">Acesso Restrito</h2>
      <label for="inputEmail" class="sr-only">login</label>
      <input type="text" id="inputEmail"  name="login"class="form-control" placeholder="login" required autofocus>
      <label for="inputPassword" class="sr-only">senha</label>
      <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="senha" required>
<!--         <div class="checkbox">
 -->          <!-- <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label> -->
          <!-- </div> -->
          <button class="btn btn-lg btn-primary btn-block" name="entrar" type="submit">Entrar</button>
          <div class="alert alert-danger error">
            <?php
                if(isset($_GET['erro'])){
                  echo "Login ou senha inválidos!";
                }
            ?>
          </div>
        </form>

      </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>