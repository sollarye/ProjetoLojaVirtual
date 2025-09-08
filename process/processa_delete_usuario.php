<?php
include 'db.php';

$id_user=$_GET['id'];

$query = "DELETE FROM cliente WHERE id_cliente = $id_user";

mysqli_query($conexao,$query);

header("Location: ../views/visualizar_dados.php?deletado=1");

?>

