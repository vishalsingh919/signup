<?php

include 'conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM crudtable WHERE id = $id";

mysqli_query($con,$sql);

header('location:display.php');

?>