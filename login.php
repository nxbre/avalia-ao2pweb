<?php
    include('servidor.php');
    if(empty($_POST['nickname']) ||
       empty($_POST['pass'])){
       header('Location: login.html');
       exit();
    }

    $nick = $_POST['nickname'];
    $senha = $_POST['pass'];

    $cmd = $pdo->prepare(
      "SELECT pass, nickname FROM usuario WHERE pass = :s and nickname = :ni");

    $cmd->bindValue(
      ":s", md5($senha));

    $cmd->bindparam(
      ":s, $nickname);
      
    $cmd->execute();

    if($cmd->rowCount() == 0){
        echo "Dados incorretos"
        ?>
           <div>Caso não tenha conta, cadastre-se aqui - <a href="cadastro.php">Cadastrar aqui!</a></div>
        <?php
    }else{
        header("Location: list.php");
    }
?>
