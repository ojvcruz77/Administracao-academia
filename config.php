<?php


        $dbHost = 'LocalHost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'sistema_academia';
        
        $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

        if($conexao->connect_errno){
            echo "Banco de Dados Desconectado!";
        }else{
            
        }
?>