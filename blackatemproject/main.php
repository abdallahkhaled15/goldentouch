<?php
$paths=[];
function card ($name,$paths){
    
    $images=[];
    $head='<div class="card">
    <div class="card-body">
      <p class="card-text text-center">{$name}</p>
    </div>
    <div class="swiper">
      <div class="swiper-wrapper">';
      $foot='  </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    </div>';
    for ($i=0; $i < 1; $i++) { 
      $images[$i]='<div class="swiper-slide">
      <img src="{$paths}" class="cardimg" >
    </div>';
    }
return $head+$images+$foot;
}
?>