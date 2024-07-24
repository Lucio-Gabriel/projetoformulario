<?php

    // seções
    session_start();

    // print_r($_REQUEST);

    // verificando se foi submitado
    if(isset($_POST['submit'])  && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        // verificando se o cadastro existe no nosso banco
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        // executando no nosso banco de dados
        $result = $conexao ->query($sql);

        // print_r($sql);
        // print_r($result);

        // verifacando numero de linhas & direcioando pro sistema
        if(mysqli_num_rows($result) < 1 )
        {
            // destruindo dados
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            // print_r('Não existe cadastro');
            header('Location: telaLogin.php');
        }
        else
        {
            
            
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            // print_r('Existe');
            header('Location: sistema.php');
        }

    }
    else
    {
        
        // Não acessa
        header('Location: telaLogin.php') ;
    }

?>