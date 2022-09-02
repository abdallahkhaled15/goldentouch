<?php
session_start();
if ($_SESSION["logged"]){

$conn = New mysqli("localhost","root","","golden touch");
$pathes=[];
if (isset($_POST['submit'])) {
$title=$_POST['title'];
$i=0;
foreach($_FILES['images']['name'] as $key => $value) {
    $rand=rand('1111111111','9999999999');
    $newname=$rand.$value;
    $pathes[$i]=$newname;
  move_uploaded_file($_FILES['images']['tmp_name'][$key],'uploads/'.$newname);
  $i++;
}
// echo "<pre>";
// echo implode(",",$pathes);
$realpath = implode(",",$pathes);
// print_r($realpath);
$sql="INSERT INTO `products` (`title`, `paths`) VALUES ('$title','$realpath')";
mysqli_query($conn, $sql) or exit(mysqli_error($conn)); 
header("location:bestproducts.php");

}
}else {
header("location:index.php");
}
// $filess= $_FILES['images'];
// $name=$_POST['title'];

//      foreach ($_FILES['images']['tmp_name'] as $key   ) {
//          $imgtmpname=$_FILES['images']['tmp_name'][$key];
//          $imgname=$_FILES['images']['name'][$key];
         
     
//          $directory='uploads/';
//          $result=move_uploaded_file($imgtmpname,$directory.'newwwwwww'.$imgname);
//      }
//      if ($result=true) {
//         echo"img secces";
//      }
// foreach ((array) $_FILES['files'] as $file ) {
//     print_r($filess);
    
//     $filename=$_FILES['files']['name'][$file];
//     $filetmpname=$_FILES['files']['tmp_name'][$file];
//     $filesize=$_FILES['files']['size'][$file];
//     $fileerror=$_FILES['files']['error'][$file];
//     $fileryoe=$_FILES['files']['type'][$file];
//     $fileext=explode('.',$filename);
//     $fileactualext =strtolower(end($fileext));
//     $allowed = array ('jpg','jpeg','png','pdf','svg','images');
//     if (in_array($fileactualext,$allowed)) {
//         if ($fileerror===0) {
//             if ($filesize<1000000) {
//                 $filenewname=uniqid('',true).$fileactualext;
//                 $pathes=[$filenewname];
//                 echo"achiede";
//                 $filepaths='uploads/'.$filenewname;
//                 move_uploaded_file($filetmpname,$filepaths);
//             }else {
//                 echo"this file is very big";
//             }
//         }else {
//             echo'there was error while uploading';
//         }
//     }else{
//         echo'you cant upload file of this type';
//     }
// }
//  mysqli_query($conn, "INSERT INTO `product` (`title`, `paths`) VALUES ('$name', "foreach ($pathes as $key ) {return $key;}"); "  ) or exit(mysqli_error($conn));

// 


?>