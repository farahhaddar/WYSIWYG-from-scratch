<?php
// connecting to database 
$servername = "localhost";
$username = "admin";
$password = "12345678";
$dbname = "wysiwyg";
$con = new mysqli($servername, $username, $password, $dbname) ;

if ($con->connect_error) 
{
 die("Connection failed: " . $con->connect_error); 
 exit();
}

//inserting data into database 
if (isset($_POST['submit'])) {
    $content = base64_encode($_POST['tx']);

    $sql = ("INSERT INTO data (content) VALUES ('$content')") or die($mysqli->error);

    mysqli_query($con, $sql);

    header("location:createContent.php");

}

//retriving data to  editor from database 

 // <a href=editContent?$id><button> edit </button></a> note that you retrive the id from the selected row  
if (isset($_GET['edit'])) {
  
    $id = $_GET['edit'];
    $sql = "SELECT * FROM data   WHERE id=$id";
    $data = mysqli_query($con, $sql);
    if ($data->num_rows > 0) {
        $row = mysqli_fetch_assoc($data);
    }
    header("location:editContent?id=$id.php");
   
}
 
// saving data to data base after editing 
if (isset($_POST['update'])) {
//   id   type hidden in the text editor page but here efult for testing 
    $id = $_POST['id'];
    $content = trim($_POST['tx']);
    // allows you to check if empty values 
    // if (strcmp($content, "") == 0) {
    //     $contentEr = "true";
    // } else {
    //     $text = base64_encode($content);
    // }
    $text = base64_encode($content);
    $sql = ("UPDATE  data  set content='$text' WHERE  id=$id") or die($mysqli->error);
      mysqli_query($con, $sql);
      header("location:editContent.php?id=$id");
  
}
?>