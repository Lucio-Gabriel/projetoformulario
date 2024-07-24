<?php
session_start();
// destruindo dados
unset($_SESSION['email']);
unset($_SESSION['senha']);
// print_r('Não existe cadastro');
header('Location: telaLogin.php');
?>