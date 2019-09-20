/* Site.js File */

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

/* Tooltips */   
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});