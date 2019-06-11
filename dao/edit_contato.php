<?php
include "../config.php";

$sql = "UPDATE agenda 

SET
nome = '$_POST[nome]',
email = '$_POST[email]',
telefone = '$_POST[telefone]',
celular = '$_POST[celular]',
datanascimento = '$_POST[datanascimento]',
rua = '$_POST[rua]',
numero = '$_POST[numero]',
bairro = '$_POST[bairro]',
cidade = '$_POST[cidade]',
estado = '$_POST[estado]',
site = '$_POST[site]',
observacao = '$_POST[observacao]'

WHERE

cod_contato = $_POST[cod_contato];";

//echo $sql;
//Executo a minha query
//echo $sql;
$query = mysqli_query($con, $sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
    echo "<script>alert('Usuário Editado com sucesso');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=editar_contato&contato=$_POST[cod_contato]'> ";


  }
else {
    echo "Não foi possivel editar o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}
?>