<?php  

include "db_conn.php";

$sql = "SELECT * FROM sistema_login ORDER BY id DESC";
$result = mysqli_query($conn, $sql);