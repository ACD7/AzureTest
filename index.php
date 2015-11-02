<!DOCTYPE html>
<html>
    <head>
     </head>
     <body>
        <form action="index.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" name="submit">
        </form>

        <?php

        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "Andrew" && $password == "jimfeeley1"){
            echo "\r\n" . "Welcome " . $username . ", your Login was Successful";
            setcookie('username', $username);
            setcookie('access_level', 'admin');
        }
        else{
        echo "Login Failed";
        }
        ?>
</body>
</html>
