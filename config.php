<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName ='formulario-gabriel';

    // fazendo conexao 
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // // testando conexao
    // if($conexao-> connect_errno){
    // echo "Error";
    // }
    // else{
    //     echo "Conexão efetuada com sucesso";
    // }
    
?>