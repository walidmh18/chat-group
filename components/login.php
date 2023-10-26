<?php  
include("./connection.php");
session_start();
if(isset($_POST["username"]) && isset($_POST["password"])){
   $username = $_POST["username"];
   $password = $_POST["password"];
   $sql = "SELECT * FROM users WHERE username='$username'";
   $result = mysqli_query($con, $sql);
   if(mysqli_num_rows($result) > 0){
  
   echo mysqli_num_rows($result);

   while($row = mysqli_fetch_assoc($result)){
      print_r($row);
      if($row['password'] === $password){
         $_SESSION['username'] = $username;
         $_SESSION['id'] = $row['id'];
         $_SESSION['img'] = $row['profile_pic'];

         header('Location:../chat');
         } else {
            header("Location: ../login?err=Username and password don't match, please try again.");
         }
   }
      } else {
         header("Location: ../login?err=Username not found, please re-check your entries.");
      }



}


?>