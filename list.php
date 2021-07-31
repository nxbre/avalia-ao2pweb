<?php
    include('servidor.php');
    ?>
        <form method="POST" name="form" action="search.php">
            <br>
            <label for="search">
              Buscar usuário: </label>
          
            <input type="text"
                   name="search">
            <br>
            <button type="submit" value="Send">Buscar</button>
            <br>
            <br>
        </form>
    <?php

    $cmd = $pdo->prepare(
      "SELECT nickname, email FROM usuario");
    $cmd->execute();
    $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < count($resultado); $i++) { 
        echo "Usuário: ".($i+1)."<br>";
        foreach (
          $resultado[$i] as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        echo "<br>";
    }
    ?>
        <div>Caso já haja cadastro -<a href="login.html">aqui</a>.</div>
    <?php
?>
