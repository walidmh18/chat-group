<?php
include('./connection.php');
session_start();
$_SESSION['username'] = 'walid2';
$_SESSION['id'] = '2';
$grp = $_GET['grp'];
$name = $_GET['name'];
$username = $_SESSION['username'];
$id = $_SESSION['id'];

$sql = "SELECT members FROM `groups` WHERE name='$grp'";
$query = mysqli_query($con,$sql);
// echo '<pre>';
// print_r(mysqli_fetch_array($query,MYSQLI_ASSOC));
// echo '</pre>';

$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
echo '<pre>';
print_r($row);
echo '</pre>';
echo $row['members'];
$members=json_decode($row['members']);



if (in_array($id,$members)) {
   header('Location: ../../chat?id='.$grp.'&name='.$name);
} else {
   array_push($members,$id);
   $nmembers = json_encode($members);
   echo '<pre>';
   print_r($nmembers);
   echo '</pre>';
   $sql = "UPDATE `groups` SET members='$nmembers' WHERE name='$grp'";
   $res = mysqli_query($con,$sql);
   header('Location: ../../chat?id='.$grp.'&name='.$name);
}

?>