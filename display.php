<?php

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "Andrew" && $password == "jimfeeley1"){
    echo "Welcome " . $username . ", your Login was Successful";
}
else{
    echo "Login Failed";
}

