<?php

include('connect.php');

$id = $_GET['id'];
$myselect = $_GET['myselect'];

$del = mysqli_query($connect,"DELETE FROM $myselect WHERE id = $id;"); // delete query

if($del){
    mysqli_close($connect); // Close connection
    header("location:index.php?myselect=$myselect"); // redirects to all records page
    exit;	
}
else{
    echo "Error deleting record"; // display error message if not delete
}
