<?php
$conn = New mysqli("localhost","root","","golden touch");
session_start();

  $select = mysqli_query($conn, "SELECT * FROM `emails` WHERE `username` = '".$_POST['email']."' And `password` ='".$_POST['pass']."' "  ) or exit(mysqli_error($conn));
if(mysqli_num_rows($select) > 0) {
  $_SESSION["logged"]=true;
   header("location:putnewinfo.php");
}else {
              
              echo "<div style='width=100%;height:100%;display:flex;flex-direction:column;align-items:center;'><h1 style='color:grey;' >you entered wrong user name or password <a href='login.php'>  to try again</a></h1><img style='width:420px; 'src='assets/images/10.jpg' alt='error '> </div>";
  $_SESSION["logged"]=false;

}

?>