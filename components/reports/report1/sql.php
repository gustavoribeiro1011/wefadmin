<?php
//Criar a conexão
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if (mysqli_connect_errno()) { // Se a conexão falhar...

  $db_message = json_encode(mysqli_connect_error());

  echo "<script>alertify.notify(decodeURIComponent($db_message), 'error', 10, function(){  console.log('dismissed'); });</script>";
} else {

  //Faz a consulta SQL
<<<<<<< HEAD
  $sql = "SELECT * FROM forms ORDER BY created DESC";
=======
  $sql = "SELECT * FROM forms ORDER BY id desc";
>>>>>>> a1170740a95f3378bfbc039e82d89bda837d332e

  //Retorna os resultados
  $result = mysqli_query($conn, $sql);
}
