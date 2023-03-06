<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="signin.php" method="get">
        Username:<input type="text" name="user">
        Password:<input type="password" name="pass">
        <input type="submit" name="signin">
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

    $user = $_GET["user"];
    $pass = $_GET["pass"];
    if(isset($_GET["user"])&&isset($_GET["pass"])){
        $query1 = "INSERT INTO users(user, pass)VALUES('$user','$pass')";
        if($con->query($query1)){
            echo "signin succesfuly";
        }else{
            echo "error ".$con->error;
        }
    }
    $conn->close();
    ?>
    <a href="login.php">Login</a>
    
</body>
</html>