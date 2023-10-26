<?php  
include("./connection.php");
session_start();
if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST['email'])){
   $username = $_POST["username"];
   $password = $_POST["password"];
   $email = $_POST["email"];

   $sql = "SELECT * FROM users WHERE username='$username'";
   $result = mysqli_query($con, $sql);
   if(mysqli_num_rows($result) == 0){
  
      echo mysqli_num_rows($result);
      $sql = "INSERT INTO users (username ,email, password) VALUES ('$username' ,'$email' , '$password') ";
      $result = mysqli_query($con, $sql);
      header("Location:../login");

   } else if(mysqli_num_rows($result) == 1){
      header("Location: ../signup?err=This username already exists, please chose another one instead.");
   } else{
      header("Location: ../signup?err=Something went wrong, please try again.");
   }



} else {
   header("Location: ../signup?err=Something went wrong, please try again.");
}


?>