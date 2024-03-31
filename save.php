<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn)
{
    echo"Not Connected";
}

if(true) 
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['msg'];


$sql = "INSERT INTO `store`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";

$result = mysqli_query($conn , $sql);

if($result)
{
    echo "Data Submitted";
}
else
{
    echo "Failed to submit data...";
}
}
    
mysqli_close($conn);
    
?>