<?php
include('./connection.php');
$grp = $_POST['grp'];
$max = isset($_POST['maxId'])? $_POST['maxId'] :0;

// echo $_POST['maxId'];
// echo $max;
$sql = "SELECT * FROM  `$grp` WHERE id > ".$max;
$query = mysqli_query($con,$sql);
$arr = array();
$maxarr = array();
while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
   // echo '<pre>';
   // print_r($row);
   // echo '</pre>';
   $username = $row['msgAuthor'];
   $sql = "SELECT * FROM users WHERE username='$username' ";
   $user = mysqli_fetch_array(mysqli_query($con,$sql),MYSQLI_ASSOC);
   $currTime = strtotime(date("Y-m-d H:i:s"));
   $msgTime = $row['msgTime'] - 3600;
   if (date("Y-m-d", $currTime) == date("Y-m-d", $msgTime) || $currTime - $msgTime< 3600*24) {
      $time = 'Today, '.date("H:i",$msgTime);
   } else if ($currTime - $msgTime< 3600*24*2){
      $time = 'Yesterday, '.date("H:i",$msgTime);
   } else{
      $time = date("Y-m-d",$msgTime).' '.date("H:i",$msgTime);

   }

   $msg = array('pfp' => $user['profile_pic'],'username'=>$user['username'],'time'=>$time, 'content' => $row['msgContent']);

array_push($arr,$msg);
array_push($maxarr,$row['id']);
// echo '<pre>';
// print_r($row);
// echo '</pre>';
}

$maximum = isset($maxarr[0]) ? end($maxarr) : $max;
$final = array($maximum,$arr);

echo json_encode($final);
// echo json_encode($final);
// echo $maxarr[0];
?>