<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styling/styleidnex.css">
</head>
<body>
    <header id="header">
            <h1>Welocme to my blog</h1>
    </header>

    <nav id="nav">
        <ul>
            <li>
                <a href="#" target="_blank">Home</a>
                <?php if($_SESSION["key"] == 1){ ?>
                    <a href="blog.php" >blogs</a>
                <?php }else{ ?>
                    <a href="login.php" >blogs</a>
                <?php } ?>    
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Contact Us</a>  
                <a href="profile.php">Profile</a>
            </li>
        </ul>
    </nav>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Albion@123";
    $dbname = "test";
    
    $con = new mysqli($servername, $username, $password, $dbname);
    
    if($con->connect_error){
        die("connection failed: ".$con->connect_error);
    }

    $query = "SELECT * FROM blog";
    $result = $con->query($query);
    ?>

<br>
<br>
<br>

<?php if ($result->num_rows > 0) { ?>
        <table id="table">
            <th>Title</th>
            <th>Body</th>
            <th>Author</th>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr class="article">
                    <td><?php echo $row["title"]; ?></td>           
                    <td><?php echo $row["body"]; ?></td>
                    <td><?php echo $row["author"]; ?></td>
                </tr>
                <?php } ?>
            </table>
            <footer id="footer">
<?php
}
?>
                <br>
                <?php if($_SESSION["key"] == 1){ ?>
                <a href="blog.php" id="write">Write a blog</a>
                <a href="login.php?isLogedOut" id="write">logout</a>
                <?php } ?>
                <br>
                <br>
                <br>
                <h2>Copyright &#169; 2023 klevii</h2>
            </footer>
            <?php $conn->close(); ?>
</body>
</html>