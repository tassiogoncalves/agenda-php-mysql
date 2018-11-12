<?php
include "../config.php";
?>

<?php
$senha=md5($_POST['senha']);

if(isset($_POST['acl'])){
$acl = 1;
}else{
$acl = 0;	
}

$sql = "INSERT INTO usuarios(
nome,
login,
senha,
email,
acl
)
VALUES (
'".$_POST["nome"]."',
'".$_POST["login"]."',
'".$senha."',
'".$_POST["email"]."',
'".$acl."'
)";

//echo $sql;
//Executo a minha query
//echo $sql;
$query = mysqli_query($con, $sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
  echo "<script>alert('Usuário cadastrado com sucesso');</script>";
  echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=listar_contatos&contato='> ";
}
else {
  echo "Não foi possivel inserir o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}
?>