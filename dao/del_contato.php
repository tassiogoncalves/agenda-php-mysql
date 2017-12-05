  <?php
  include "../config.php";

  $sql = "DELETE FROM agenda WHERE cod_contato = $_REQUEST[contato];";


  if (mysqli_query($con, $sql) === TRUE) {
    //escrever aqui a mensagem de ok do delete.
    echo "<script>alert('Usuário Excluído com sucesso');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=listar_contatos&contato='> ";
  } else {
    echo "DELETE ERRO" . error;
    echo "<script>alert('Erro ao Excluir Usuário');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=listar_contatos&contato='> ";

  }
  ?>