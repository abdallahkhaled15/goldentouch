<?php
$conn =  New mysqli("localhost","root","","golden touch");

function card ($name , $pathes){
  $images=[]; 
  $head="  <div class='card'>
  <div class='card-body'>
     <p class='card-text text-center'>{$name}</p>
  </div>     
    <div class='swiper'>
      <div class='swiper-wrapper'>
";
    $foot="   
        </div>
    <div class='swiper-button-next'></div>
    <div class='swiper-button-prev'></div>
  </div> 
</div>";
echo $head ;
$str_arr = explode (",", $pathes); 
    foreach ($str_arr as $path ) {
      echo " 
       <div class='swiper-slide'>
      <img src='uploads/$path' class='cardimg' >
    </div>";
    }

 
echo $foot ;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bestpro.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/iconwhite.png" />
  <title>Golden Touch | Projects</title>
<meta name="keywords" content="projects , goldentouch , golden , best proects golden touch ," />
<meta name="description" content="WE HAVE BEEN IN THE MARKET SINCE 2010,
We have been in the market since 2010, specialized in managing events, exhibitions, advertising signs and " />
</head>
<body>

<?php
include "header.php";

echo $header;
?>
  <div class="container">
    <p class='text'>
      <span class="txtgold">
        Enjoy By
      </span>
       Our Best Projects
    </p>
    </div>
    <div class="container d-flex flex-wrap justify-content-between" style="margin-top:50px;">
    <?php
    $sql = "Select * From products ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       
      $id = $row['title'];  $nam = $row['paths'];
      card($id,$nam);
    }}
    ?>
  </div>
  <?php
include "footer.php";

echo $footer;
?>
    <script type="module">
      import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

      const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>