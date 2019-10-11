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

document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};

//document.getElementById('status').innerHTML = "Sending...";
//formData = {
//'name'     : $('input[name=name]').val(),
//'email'    : $('input[name=email]').val(),
//'subject'  : $('input[name=subject]').val(),
//'message'  : $('textarea[name=message]').val(),
//'message'  : $('textarea[name=message]').val()    
//};
//
//
//$.ajax({
//url : "contact.php",
//type: "POST",
//data : formData,
//success: function(data, textStatus, jqXHR)
//{
//
//$('#status').text(data.message);
//if (data.code) //If mail was sent successfully, reset the form.
//$('#contact-form').closest('form').find("input[type=text], textarea").val("");
//},
//error: function (jqXHR, textStatus, errorThrown)
//{
//$('#status').text(jqXHR);
//}
//});