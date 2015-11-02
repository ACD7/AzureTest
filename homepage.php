<?php

$username = $_POST["username"];
$password = $_POST["password"];
$access_level = "standarduser";

if($username == "Andrew" && $password == "jimfeeley1"){
    echo "\r\n" . "Welcome " . $username . ", your Login was Successful";
    setcookie('username', $username);
    setcookie('access_level', $access_level);
    displayAccessLevelInformation($_COOKIE["access_level"]);
}
else if($username == "" && $password == ""){
    echo "Please Login";
}
else{
    echo "Login Failed";
}

function displayAccessLevelInformation($accessLevel)
{
    if ($accessLevel == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    } elseif ($accessLevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}
?>

