<?php
       if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
       {
            include_once('config.php');
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            $sql = "SELECT * FROM clientes WHERE nome = '$nome' and senha = '$senha'";
            $result = $conexao->query($sql);

            if(mysqli_num_rows($result) < 1)
            {
                
                header('Location: loginclient.php');
                
            }
            else
            {
                
                header('Location: homeclient.php');
            }
       }
       else
       {
            header('Location: loginclient.php');
       }

?>