<?php  

if(isset($_GET['id'])){
   include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM sistema_login
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../read.php?success=Objeto Deletado");
   }else {
      header("Location: ../read.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../read.php");
}