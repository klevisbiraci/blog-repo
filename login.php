<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styling/styleloginform.css">
</head>
<body>
<header id="header">
    <h1>Log in</h1>
</header>
<div class="form">
    <form action="login.php" method="get">
        <h4>Username:</h4><input type="text" name="user">
        <br>
        <br>
        <h4>Password:</h4><input type="password" name="pass">
        <br>
        <br>
        <input type="submit" name="login">
    </form>
</div>
    <a id="link" href="signin.php">Singin</a>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Albion@123";
    $dbname = "users";
    
    $con = new mysqli($servername, $username, $password, $dbname);
    
    if($con->connect_error){
        die("connection failed: ".$con->connect_error);
    }

    if(isset($_GET["user"])&&isset($_GET["pass"])){
        $query = "SELECT * FROM users";
        $condition = $con->query($query);
        while($check = $condition->fetch_assoc()) { 
            if($check["user"]==$_GET["user"]&&$check["pass"]==$_GET["pass"]){
                $_SESSION["key"] = 1;
                if($_SESSION["key"] == 1){
                    header("Location: index.php");
                    $_SESSION["username"] = $_GET["user"];
                }
            }else{
                echo "username or password is wrong ";
            }
        }
    }
    
    if(isset($_GET["isLogedOut"])){
        $_SESSION["key"] = 0;
    }

    $conn->close(); 
    ?>
</body>
</html>