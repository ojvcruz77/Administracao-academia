<?php
       if(isset($_POST['submit']) && !empty($_POST['nomeadm']) && !empty($_POST['senhaadm']))
       {
            include_once('config.php');
            $nome = $_POST['nomeadm'];
            $senha = $_POST['senhaadm'];

            $sql = "SELECT * FROM adms WHERE nome = '$nome' and senha = '$senha'";
            $result = $conexao->query($sql);

            if(mysqli_num_rows($result) < 1)
            {
                
                header('Location: loginadm.php');
                
            }
            else
            {
                
                header('Location: index.php');
            }
       }
       else
       {
            header('Location: loginadm.php');
       }

?>