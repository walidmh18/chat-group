<?php
include_once('./connection.php');
session_start();
if (isset($_POST['msg']) && $_POST['msg'] != '') {
   $msg = $_POST['msg'];
   $username = $_SESSION['username'];
   $grp = $_POST['grp'];
   $time = strtotime(date('Y-m-d H:i:s'));
   $sql = "INSERT INTO `$grp` (msgAuthor,msgContent,msgTime) VALUES ('$username','$msg','$time')";
   $query = mysqli_query($con,$sql);
}

?>