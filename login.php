<?php

$login = $_POST['login'];
$senha = md5($_POST['senha']);
$entrar = $_POST['entrar'];

$conexao = mysqli_connect("localhost","root","","sistema_login");

if (mysqli_connect_errno()) {
  echo "Falhou a conectar ao MySQL: ".mysqli_connect_error();
  exit();
}

if ( isset($entrar) ){

if ($verifica = mysqli_query($conexao, "SELECT * FROM sistema_login WHERE login='$login' AND senha='$senha'")) {

    if (mysqli_num_rows($verifica) <= 0 ){
        echo "<script languege='javascript' type='text/javascript'>
        alert('Login ou senha Incorreta!');
        window.location.href='login.html';</script>";
      
    }else{
        setcookie("login", $login);
        echo "<script languege='javascript' type='text/javascript'>
        alert('Bem vindo');
        window.location.href='index.html';</script>";
    }

    //echo "Returned rows are: " . mysqli_num_rows($result);

    mysqli_free_result($result);
  }
}