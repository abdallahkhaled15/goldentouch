<?php
session_start();

if ($_SESSION["logged"]){
  echo "
  <!DOCTYPE html>
  <html lang='en'>
    <head>
        <title>new project</title>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
        <link rel='stylesheet' href='css/style.css'>
        <link rel='stylesheet' href='css/putnewinfo.css'>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' />
        <link
          href='https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap'
          rel='stylesheet'>
        <link rel='icon' type='image/x-icon' href='assets/images/iconwhite.png' />
    </head>
    <body class='h100'>
 
          <div class='loader'>
            <div id='ring'>
            </div>
            <img src='assets/images/iconwhite.png' draggable='false' class='imgloader' alt=''>
          </div>
        <div class='container h-100'>
            <div class='row h-100'>
                <div class='col-12 col-md-7'> 
                    <div class='formtwo ' >
                        <p class='titleinfo'>
                            Here you can add a work <br class='br'> you done
                        </p>
                        <p class='heading'>The title you want for the product</p>
                        <form action='mkintodta.php' method='post' enctype='multipart/form-data'>
                        <input type='text' name='title' class='form-control' id='inputtitle' placeholder='Project Title' required>
                        <p id='photosadd'>add a photos</p>
                        <div class='file-upload-wrapper'>
                        <input class='form-control'style='margin-bottom:20px' name='images[]' type='file' id='formFileMultiple' accept='image/*'multiple/ required>
                        <button name='submit' id='putinfosubmit' class='btn btn-warning'> Submit</button>
                        </div>
                    </form>
                 </div>
                </div>
                <div class='col-12 col-md-5'>
                <div class='imginfodiv'>
                <img src='assets/images/data.svg' class='imginfo' alt='enter information info'>
                </div>
                </div>
            </div>
        </div>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM'
        crossorigin='anonymous'></script>
      <script src='js/main.js'></script>
    </body>
  </html>";
}else{
  header("location:index.php");
}
?>
