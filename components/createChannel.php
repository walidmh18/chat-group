<?php
include('./connection.php');
session_start();

// $_SESSION['username']= 'walid';
echo $_SESSION['username'];

if (isset($_POST['submit'])) {
   $username = $_SESSION['username'];
   // get user id
   $getId = mysqli_query($con,"SELECT id FROM users WHERE username='$username'");
   $id = mysqli_fetch_array($getId,MYSQLI_ASSOC)['id'];
   echo $id;

   $grpRName = $_POST['name'];
   $grpName = $_POST['name'].strtotime(date('Y-m-d H:i:s'));
   $grpDescription = $_POST['desc'];
   $grpMembers = json_encode(array($id));
   $sql = "INSERT INTO `groups` (name,real_name,description,members) VALUES ('$grpName','$grpRName','$grpDescription','$grpMembers')";
    echo $grpName,$grpDescription,$grpMembers;
   $addToGroups = mysqli_query($con,$sql);
   

   $sql = "CREATE TABLE `$grpName` (
      id          INT(11)        UNSIGNED   AUTO_INCREMENT PRIMARY KEY,
      msgAuthor   VARCHAR(255)   NOT NULL,
      msgContent  VARCHAR(255)   NOT NULL,
      msgTime     VARCHAR(255)   NOT NULL,
      replyto     VARCHAR(255)     
    )";
   
    $res = mysqli_query($con,$sql);
   //  echo $res;
    header("Location:../chat?id=".$grpName."&n=".$grpRName);
}




?>