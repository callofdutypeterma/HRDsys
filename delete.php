<?php

include('connect.php');

$id = $_GET['id'];

$del = mysqli_query($connect,"DELETE FROM units WHERE id = $id;"); // delete query

if($del){
    mysqli_close($connect); // Close connection
    header("location:index.php"); // redirects to all records page
    exit;	
}
else{
    echo "Error deleting record"; // display error message if not delete
}
