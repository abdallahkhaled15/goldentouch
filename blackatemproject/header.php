<?php
$header= '
<div class="scrolltotop ">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg>
</div>
<div class="loader">
<div id="ring">
</div>
<img src="assets/images/iconwhite.png" draggable="false" class="imgloader" alt="">
</div>

<nav class="navbar fixed-top navbar-expand-lg navbar-light">

<div class="container">
  <div class="dflex">
    <a class="navbar-brand"><img src="assets/images/gold.png"   aria-labelledby="dropdownMenuButton1"  id="texticon" alt="text golden touch"></a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-lin" aria-current="page" href="index.php"> Home page</a>
        </li>
        <li class="nav-item">
          <a class="nav-lin" href="bestproducts.php"> best Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-lin" href="contactus.php"> contact us</a>
        </li>
    </div>
    <i class="fa-solid fa-bars iconhead" aria-controls="offcanvasRight" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"></i>
  </div>
  </div>
  </nav> 
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel"><img src="assets/images/gold.png"  draggable="false"   class="offcanvasimg" alt="">
    </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="index.php">Home Page</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bestproducts.php">best Projects</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="contactus.php">Contact Us</a>
  </li>
</ul>
  </div>
</div>
 <script src="https://kit.fontawesome.com/3d3b4696a4.js" crossorigin="anonymous"></script>
'
 ?>
