<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$login = validate($_POST['login']);
	$senha = validate($_POST['senha']);

	$user_data = 'login='.$login. '&senha='.$senha;

	if (empty($login)) {
		header("Location: ../index.php?error=login is required&$user_data");
	}else if (empty($senha)) {
		header("Location: ../index.php?error=senha is required&$user_data");
	}else {

       $sql = "INSERT INTO sistema_login(login, senha) 
               VALUES('$login', '$senha')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}