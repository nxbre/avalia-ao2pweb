<?php
  try {
    $username = "root";
    $password = "";

    $pdo = new PDO(
      'mysql:dbname=pweb2;host=localhost', $username, $password);
  } catch(PDOException $e) {
    echo 'Erro Encontrado: ' . $e->getMessage();
    exit();
  }
?>
