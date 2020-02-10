/* Site.js File */


	$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});


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

//document.getElementById("uploadBtn").onchange = function () {
//    document.getElementById("uploadFile").value = this.value;
//};