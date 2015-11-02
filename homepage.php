<?php

$username = $_POST["username"];
$password = $_POST["password"];
$access_level = "standarduser";

if($username == "Andrew" && $password == "jimfeeley1"){
    echo "\r\n" . "Welcome " . $username . ", your Login was Successful";
    setcookie('username', $username);
    setcookie('access_level', $access_level);
}
else if($username == "" && $password == ""){
    echo "Please Login";
}
else{
    echo "Login Failed";
}

displayAccessLevelInformation($_COOKIE["access_level"]);

function displayAccessLevelInformation($accessLevel)
{
    if ($access_level == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    } elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}
?>

