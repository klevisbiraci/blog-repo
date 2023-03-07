<?php 
session_start();
if($_SESSION["key"]==1){ 
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styling/styleblog.css">
    </head>
    <body>
        <header id="header">
            <h1>Post</h1>
        </header>
        
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php" >Home</a>
                    <a href="#" >blogs</a>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Contact Us</a>  
                    <a href="profile.php">Profile</a>
                </li>
            </ul>
        </nav>
        
        <br>
        <br>
        <br>
        <br>
        
        <div id="form">
            <form action="handeling.php" method="post" id="form">
                <h4>Title:</h4><input type="text" name="title" placeholder="title of the blog">
                <h4>Body:</h4><textarea name="blog" rows="10" cols="50" placeholder="your blog"></textarea>
                <br>
                <br>
                <h4>Author:<?php echo " ".$_SESSION["username"]; ?></h4>
                <br>
                <br>
                <input type="submit">
            </form>
        </div>
            <br>
            <br>
            <br>
            <?php
            if (isset($_GET['afterSubmition'])) {
                echo "sucess ";
            }
            ?>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer id="footer">
        <h2>Copyright &#169; 2023 klevii</h2>
    </footer>
    
</body>
</html>
<?php } ?>