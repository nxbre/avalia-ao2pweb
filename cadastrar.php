<?php
    include('server.php');
    if(empty($_POST['nome']) || 
       empty($_POST['email']) || 
       empty($_POST['nickname']) || 
       empty($_POST['pass'])){
       header('Location: cadastrar.html');
       exit();
    }

    $nome = $_POST['nome'];
    $nick = $_POST['email'];
    $email = $_POST['nickname'];
    $senha = $_POST['pass'];

    $cmd = $pdo->prepare("INSERT INTO usuario(
      nome, 
      email, 
      nickname, 
      pass) 
      VALUES (:n, :e, :ni, :p)");

    $cmd->bindparam(
      ":n",$nome);

    $cmd->bindparam(
      ":e",$email);

    $cmd->bindparam(
      ":ni",$nickname);

    $cmd->bindValue(
      ":p",md5($pass));

    $cmd1 = $pdo->prepare(
      "SELECT nome FROM usuario WHERE  email = :e or nickname = :ni");

    $cmd1->bindparam(
      ":e",$email);

    $cmd1->bindparam(
      ":ni", $nickname);

    $cmd1->execute();

    if($cmd1->rowCount() == 0){ $cmd->execute();
        header("Location: login.html");
    }else{ echo "Usuário já cadastrado."."<br>";
        ?>
<div>Tela de Cadastro - <button><a href="cadastrar.html">Voltar</a></button></div>
        <?php
    }
?>
