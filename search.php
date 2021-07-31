<?php
    include('servidor.php');

    if(empty(
      $_POST['search'])){
      header('Location: list.php');
      exit();
    }

    $buscar = $_POST['search'];

    $cmd = $pdo->prepare(
      "SELECT email, nickname FROM usuario WHERE email = :sc or nickname = :sc");

    $cmd->bindparam(
      ":sc", $buscar);

    $cmd->execute();

    if($cmd->rowCount() == 0){
        echo "Conta não cadastrada.<br>";
    }else{
        $resultado = $cmd->fetch(PDO::FETCH_ASSOC);
        echo "Conta:<br>";
        foreach ($resultado as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        echo "<br>";
    }

    ?>
<div><button><a href="list.php">Voltar a página anterior</a></button></div>
    <?php
?>
