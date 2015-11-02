<?php

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "Andrew" && $password == "jimfeeley1"){
    echo "Login Successful";
}
else{
    echo "Login Failed";
}

