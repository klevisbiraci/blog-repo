<?php
$servername = "localhost";
$username = "root";
$password = "Albion@123";
$dbname = "test";

$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error){
    die("connection failed: ".$con->connect_error);
}


if(!empty($_POST["title"]) && !empty($_POST["blog"]) && !empty($_POST["author"])){
  $title = $_POST["title"];
  $body = $_POST["blog"];
  $author = $_POST["author"];
  
  $query = "INSERT INTO blog(title, body, author)VALUES('$title','$body','$author')";
  if ($con->query($query) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $query . "<br>" . $conn->error;
    }
}

header("Location: blog.php?afterSubmition");
  
$conn->close();
?>