
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Golden Touch | Login for workers</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/iconwhite.png" />
    </head>
    <body>
     
          <?php
include "loader.php";

echo $loader;
?>
  <div class="container d-flex justify-content-center "style="height:100vh;flex-direction: column">
      <div class="row">
        <div class="col">
          <div class="login">
                  <p class="logtitle">Login</p>
                  <p class="logdesc">if you you are not worker <a href="index.php"> click here</a>
              </p>
              <form action="afterlog.php" class="d-flex flex-column" method="post">
                <input type="text"  name="email" class="formcontrol" id="staticEmail" placeholder="email@example.com">
                <input type="password"  name="pass" class="formcontrol" id="paswword" placeholder="******************">
                <button type="submit" class="btn btn-warning">Login</button>
              </form>
          </div>
      </div>
        <div class="col coln">
          <div class="imgdiv">
              <img src="assets/images/loginbgimg.svg" class="imglog" alt="login image">
          </div>
      </div>
    </div>
</div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        </body>
</html>