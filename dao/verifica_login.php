<?php
//conecta ao banco de dados
include "../config.php";
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = md5($_POST['senha']);

// A vriavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$query = "select * from $nome_banco.usuarios where login = '".$login."' and senha = '".$senha."'";

$result = mysqli_query($con, $query);
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
//echo "numero de Linhas: ".mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
  while ($dados = mysqli_fetch_array($result)) {
	  $nome = $dados['nome'];
	  $acl = $dados['acl'];
  }
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  $_SESSION['user'] = $nome;
  $_SESSION['acl'] = $acl;
  header('location:http://'.$site.'index.php');
} else{
  echo "<script>alert('Usuário e/ou senha incorreto(s)');</script>";    
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  unset ($_SESSION['user']);
  echo "<script>window.location.replace('http://".$site."/login.php');</script>";
}

?>
