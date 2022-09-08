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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/iconwhite.png" />

  <title>Golden Touch | Home Page</title>
  <meta name="keywords" content="projects , goldentouch , golden , best proects golden touch ," />
<meta name="description" content="WE HAVE BEEN IN THE MARKET SINCE 2010,
We have been in the market since 2010, specialized in managing events, exhibitions, advertising signs and " />
</head>

<body>
  <div class="scrolltotop ">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-arrow-up" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
    </svg>
  </div>
  <?php
include "header.php";
include "footer.php";

echo $header;
?>
  <video muted autoplay loop controls class="video" id="video">
    <source id="video" src="assets/goldentouchvid.mp4" type="video/mp4">
  </video>
  <div class="ouractivity">
    <div class="container text-center">
      <p class="title">Our Activity</p>
      <div class="descbar">
        <p class="desc">Specializing in making parties, advertising banners and exhibition booths. We are in the Egyptian market since 2010</p>
      </div>
      <div class="photos">
        <div class="cole">
          <div class="imgte">
            <div class=" imgtext ">Glass Rock</div>
              <img class="img" src="assets/images/1.jpg" alt="">
            </div>
          <div class="imgte">
            <div class=" imgtext ">Technometal</div>
              <img class="img" src="assets/images/2.jpg" alt="">
            </div>
        </div>
     
         
        <div class="imgte">
          <div class=" imgtext ">Sicuro</div>
            <img class="imgone" src="assets/images/3.jpg" alt="">
          </div>
      
         <div class="cole">
          <div class="imgte">
          <div class=" imgtext ">Vichy
             </div>
            <img class="img" src="assets/images/4.jpg" alt="">
          </div>
          <div class="imgte">
            <div class=" imgtext  ">Free Fire</div>
              <img class="img" src="assets/images/5.jpg" alt="">
            </div>
     </div>
      </div>
    </div>
  </div>
  <div class="events">
    <div class="container text-center">
      <p class="textgold">Golden Touch for Exhibitions and Events</p>
      <div class="row">
        <div class="col-12 col-md-8">
        <p class="bigdesc">We have workshop photos. We are a company and factory designing and manufacturing exhibition booths through production and graphics teams. We meet our services in the Arab Republic of Egypt with the best services from the beginning until delivery and dismantling,this is for exhibition stands, booths, event and conference preparations. Please don't hesitate to contact</p>
        </div>
        <div class="col-12 col-md-4">
          <img src="assets\images\info.jpg" alt="info image" class="imginfo">
        </div>
      </div>
    </div>
  </div>
  <?php
include "footer.php";

echo $footer;
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>