<?php
$conn = New mysqli("localhost","root","","golden touch");
session_start();

  $select = mysqli_query($conn, "SELECT * FROM `emails` WHERE `username` = '".$_POST['email']."' And `password` ='".$_POST['pass']."' "  ) or exit(mysqli_error($conn));
if(mysqli_num_rows($select) > 0) {
  $_SESSION["logged"]=true;
   header("location:putnewinfo.php");
}else {
  echo "<h1 >you have entered wrong user name or password</h1>";
  $_SESSION["logged"]=false;

}

?>