<?php
include 'connection.php';
$id=$_GET['deleteid'];
$sql="DELETE FROM p_info WHERE Id='$id'";
$result= $conn->query($sql);
if($result)
{
  header('location:Home.php');
}
else die("Connection failed: " . $conn->connect_error);

?>