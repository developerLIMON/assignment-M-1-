<?php

// Basic Authentification System

$Username="Limon";
$Password="12345@Ln";


//Asking for username
$inputUsername=readline("Enter Username: ");

//Checking username
if($inputUsername === $Username){

    //Asking for Password
    $inpuutPassword=readline("Enter Password");

    //Checking Password
    if($inpuutPassword === $Password){
        echo"LogIn Successful";
    }else {
        echo "Invalid Password";
    }
}else {
    echo "Invalid Username";
}
 



?>