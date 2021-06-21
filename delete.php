<?php

include "connection.php";
$id = $_GET['id'];

$delete = "DELETE FROM `students` where id = $id";
$result = mysqli_query($conn, $delete) or die("Query Failed");


header("Location: http://localhost/codility/tasks/PHP/CRUD/index.php");
mysqli_close($conn);