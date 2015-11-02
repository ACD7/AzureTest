<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$access_level = "standarduser";

if($username == "Andrew" && $password == "jimfeeley1"){
    echo "\r\n" . "Welcome " . $username . ", your Login was Successful";
    $_SESSION["username"] = $username;
    $_SESSION["access_level"] = "standarduser";
    displayAccessLevelInformation($_SESSION["access_level"]);
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
session_destroy();
?>

