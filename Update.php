<?php
include 'connection.php';
$updateid=$_GET['updateid'];
$sql="SELECT * FROM p_info WHERE Id='$updateid'";
$result=$conn->query($sql);
if($result)
{
    while($rows=$result->fetch_assoc())
    {
    $id=$rows['Id'];
    $name=$rows['Name'];
    $age=$rows['Age'];
    $email=$rows['Email'];
    $password=$rows['Password'];
    $mobile=$rows['Mobile']; 
    }
}
else die("Connection failed: " . $conn->connect_error);


if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    
    $sql="UPDATE p_info SET Id='$id',Name='$name',Age='$age',Email='$email',Password='$password',Mobile='$mobile' WHERE Id='$updateid'";
    $result=$conn->query($sql);
    if($result)
    {
    header('location:Home.php');
    }
    else die("Connection failed: " . $conn->connect_error);
    
}
?> 









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

<div class="justify-items-center mt-6 ">
<div class="w-1/2  border-2 border-indigo-600 p-6 ">
  <form action="" method ="POST" class="bg-white  rounded px-50 pt-6 pb-8 mb-4 grid grid-cols-3 gap-4  ">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        User ID
      </label>
      <input class="w-96 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value="<?php echo $id?>" name = "id">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value="<?php echo $name?>" name = "name">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Age
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="number" value="<?php echo $age?>" name = "age">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="email" value="<?php echo $email?>" name = "email">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="password" value="<?php echo $passworrd?>" name = "password">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Mobile :
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value="<?php echo $mobile?>" name = "mobile">
    </div>
    <div class="flex items-center">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline " type="submit" name ="submit">
       Submit
      </button>
    </div>
  </form>
</div>
</div>


    
</body>
</html>