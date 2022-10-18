<?php

include('connect.php');
 
// Define variables and initialize with empty values
$username=$_POST["username"];
$password=$_POST["password"];
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "SELECT * FROM member_table WHERE username ='$username'";
    $result=mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==1 && password_verify($password, $row["password"])){
        session_start();
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        //這些是之後可以用到的變數
        $_SESSION["id"] = $row["id"];
        $_SESSION["username"] = $row["username"];
        header("location:backend.php");
    }else{
        function_alert("帳號或密碼錯誤"); 
    }
}else{
    function_alert("Something wrong"); 
}

// Close connection
mysqli_close($link);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='personnelofficeindex.php';
    </script>"; 
    return false;
} 

?>
