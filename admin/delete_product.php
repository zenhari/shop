<?php
include("../conn.php");
$id = $_GET['id'];
$sql_delete = "DELETE FROM products WHERE id = '$id'";
mysqli_query($conn, $sql_delete);
header("location: index.php?product_list");
?>