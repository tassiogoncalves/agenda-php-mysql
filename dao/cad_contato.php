<?php
include "../config.php";

$sql = "INSERT INTO agenda(
nome,
email,
telefone,
celular,
datanascimento,
rua,
numero,
bairro,
cidade,
estado,
site,
observacao
)
VALUES (
'".$_POST["nome"]."',
'".$_POST["email"]."',
'".$_POST['telefone']."',
'".$_POST['celular']."',
'".$_POST['datanascimento']."',
'".$_POST['rua']."',
'".$_POST['numero']."',
'".$_POST['bairro']."',
'".$_POST['cidade']."',
'".$_POST['estado']."',
'".$_POST['site']."',
'".$_POST['observacao']."'
)";

//echo $sql;
//Executo a minha query
//echo $sql;
$query = mysqli_query($con, $sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
  echo "<script>alert('usuário cadastrado com sucesso');</script>";
  echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=listar_contatos&contato='> ";


}
else {
  echo "Não foi possivel inserir o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}
?>