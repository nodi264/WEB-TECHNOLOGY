<?php
include "../DB/dbinsert.php";
$full_name = $User_Name =  $User_Password = "";
$full_nameEr = $User_NameEr = $User_PasswordEr = '';
$valid = false;
$successMesg = $errorMesg = "";







    if($_SERVER["REQUEST_METHOD"]=="POST"){

 
        
    if (empty($_POST["fname"])) {

        $full_nameEr = "Full Name is required";
        $valid = true;
    }



    if (empty($_POST["username"])) {
        $User_NameEr = "User Name is required";
        $valid = true;
    }

    if (empty($_POST["password"])) {
        $User_PasswordEr = "Password is required";
        $valid = true;
    }

    if (!$valid) {
        $username = input($_POST["username"]);
        $password  = input($_POST["password"]);
        $full_name = input($_POST["fname"]);
    
        
       $result = register($full_name, $username, $password);
      
    }
}


function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}


?>