<?php

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "Andrew" && $password == "jimfeeley1"){
    echo "Welcome " . $username . ", your Login was Successful";
    setcookie('username', $username);
    setcookie('access_level', 'admin');
}
else{
    echo "Login Failed";
}

