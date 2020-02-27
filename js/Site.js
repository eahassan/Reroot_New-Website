/* Site.js File */

    // Navbar dropdown animations
	$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});

// Carousel - Play & Pause buttons
$(function () {
    // Click on play button, so carousel can keep sliding between images!
    $('#playBtn').click(function () {
        $('#myCarousel').carousel('cycle');
    });

    // Click on pause button to stop carousel from moving!
    $("#pauseBtn").click(function () {
        $("#myCarousel").carousel("pause");
    });
    
    });

// Tooltips  
$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();   
});

//

// Alerts
$(document).ready(function() {
      $(".close").click(function() {
        $('#success').alert("close");
          $('#fail').alert("close"); 
  });
});


//document.getElementById("uploadBtn").onchange = function () {
//    document.getElementById("uploadFile").value = this.value;
//};