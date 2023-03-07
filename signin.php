<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styling/styleloginform.css">
</head>
<body>
<header id="header">
    <h1>Sign in</h1>
</header>
<div class="form">
    <form action="signin.php" method="get">
        <h4>Username:</h4><input type="text" name="user">
        <br>
        <br>
        <h4>Password:</h4><input type="password" name="pass">
        <br>
        <br>
        <input type="submit" name="signin">
    </form>
</div>    
<a id="link" href="login.php">Login</a>
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

</body>
</html>