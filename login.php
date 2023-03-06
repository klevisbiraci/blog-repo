<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form action="login.php" method="get">
        Username:<input type="text" name="user">
        Password:<input type="password" name="pass">
        <input type="submit" name="login">
    </form>
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
                }
            }else{
                echo "username or password is wrong ";
            }
        }
    }
    
    if(isset($_GET["isLogedOut"])){
        $_SESSION["key"] = 0;
    }
        ?>
    <a href="signin.php">Singin</a>
</body>
</html>