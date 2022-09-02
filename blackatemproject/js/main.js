
  isshowed=false;
function header() {
isshowed=!isshowed;
switch (isshowed) {
  case true:
    $('.dropdow-menu').css('display','block !important');
  
    break;
  
  case false:
    $('.dropdow-menu').css('display','none  !important');

    break;
    
}
  $('.dropdow-menu').css('display','block');
}
$(document).ready(function () {
  $('#headershowlinks').click(function () {
  
  })
   $('.loader').css('display', 'none');
   $('.navbar').css('display', 'inline-block');
  //  $('.toggle-button').click(function () {
  //   $('.navbar-links').toggle('active');
  //  })
   $(this).scroll(function () {
      $(".navbar").css("background-color", "white");
      $(".nav-lin").css({ "color": "black " });

   })
   $('.infochildg').click(function () {
      window.location.href = 'https://mail.google.com/mail/?view=cm&fs=1&to=belalhussien14@gmail.com';

   })
   const scrollBtn = document.querySelector(".scrolltotop");
const upperbar = document.querySelector(".navbar");

scrollBtn.style.display = "none";

scrollBtn.addEventListener("click", () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

document.addEventListener("scroll", (e) => {
  if (document.documentElement.scrollTop <= 100) {
    scrollBtn.style.display = "none";
  } else {
    scrollBtn.style.display = "flex";
  }
});
});