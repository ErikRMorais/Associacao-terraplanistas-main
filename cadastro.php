<?php

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$conexao = mysqli_connect("localhost","root","","sistema_login");

if (mysqli_connect_errno()) {
  echo "Falhou a conectar ao MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT login FROM sistema_login WHERE login = '$login' ";
$resultado = mysqli_query($conexao,$sql);

$array = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

$login_array = $array['login'];

if ( $login == ""){
  echo "<script languege='javascript' type='text/javascript'>
  alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

}else{

  if ($login_array == $login){
  echo "<script languege='javascript' type='text/javascript'>
  alert('Esse login ja existe');window.location.href='cadastro.html';</script>";
  } else{

    $insert = "INSERT INTO sistema_login (login, senha)
    VALUES ('$login', '$senha')";

    if (mysqli_query($conexao, $insert)) {

      echo "<script languege='javascript' type='text/javascript'>
      alert('Usuário cadastrado!');window.location.href='cadastro.html';</script>";

    } else {
      echo "<script languege='javascript' type='text/javascript'>
      alert('Nao foi possivel cadastrar o usuario');window.location.href='cadastro.html';</script>";
    }

  }

}