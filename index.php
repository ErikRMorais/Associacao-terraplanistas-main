<?php
error_reporting(0);
$login_cookie = $_COOKIE['login'];

if ( isset($login_cookie) ) {

    echo "Bem Vindo $login_cookie <br>";

}else{

    echo "Bem Vindo Convidado <br>";
    echo "<a href='login.html'>Faça seu login </a> para ter acesso ao sistema!";

}