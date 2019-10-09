<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - Reroot</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Evan H.">
    <meta name="description" content="Reroot Pontiac's Green Infrastructure Site">
    <meta name="keywords" content="Reroot Pontiac, Green Infrastructure, Green Technology">
    <!-- Bootstra 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FontAwesome Icons and CSS-->   
    <script src="https://kit.fontawesome.com/8c89b82d38.js" crossorigin="anonymous"></script>
    <!-- FontAwesome Social Media Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts - Karma -->    
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <!-- Google Fonts - Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- styles CSS file -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/icons/green-leave.ico">
</head>    
<body>
<?php

echo " ";


?>

<main id="mainContent" tabindex="-1">
<div class="container-fluid">
<div class="row">
<!-- <div class="col-md-9">-->
<!-- https://mdbootstrap.com/docs/jquery/forms/contact/#antispam -->     
<div class="col-md-12">
<section>
   <h1 class="font-weight-bold text-center">Contact Us</h1>
    <hr>
    <p class="text-center">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
    <form action="#" method="POST">
            <fieldset>
              <legend class="undrline">Personal Information:</legend>
            <div class="form-group">  <!-- <i class="fas fa-user"></i> -->
            <label for="name" class="font-weight-bolder">Name:</label>    
            <input type="text" id="name" name="name" class="form-control input-name" placeholder="Enter your Name" required><br>
            </div>
                             
            
           
            <div class="form-group">    <!-- <i class="fas fa-envelope"></i> -->
            <label for="email" class="font-weight-bolder">E-Mail:</label>         
            <input type="text" id="email" name="email" class="form-control input-email" placeholder="Enter your E-Mail" pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/" required><br>
            </div>
             
              
            
            <div class="form-group">   <!-- <i class="fas fa-leaf"></i> -->           
            <label for="subject" class="font-weight-bolder">Subject:</label>       
            <input type="text" id="subject" name="subject" class="form-control input-subjct" placeholder="Enter your Subject line" required><br>
            </div>
              
                 
            <div class="form-group">   <!-- <i class="fas fa-comment-alt"></i> -->               
            <label for="message" class="font-weight-bolder">Message:</label>        
            <textarea type="text" id="message" name="message" rows="10" cols="30" class="form-control" placeholder="Your message goes here..." required></textarea>
            </div>
            
<!--
            <div class="fileUpload btn btn-primary">
             <span>Upload</span>
             <input type="file" class="upload float-left">
            </div>
-->
            <label for="uploadFile" class="font-weight-bolder">Attachments:</label>
            <input id="uploadFile" placeholder="Choose File" name="fileChoose" class="input-file">
        <div class="fileUpload btn btn-primary btn-rounded">
          <span>Upload</span>
          <input id="uploadBtn" type="file" class="upload float-left" aria-label="Upload file">
        </div>
            
            <div class="text-center marg-botm">
                <button type="submit" class=" btn btn-submit float-left">Send</button>
            </div>    
             
                                        
          </fieldset>                                                                                     
          </form> <br><br>
                
</section> 
</div>

        <div class="col-md-12 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p class="lead">76 Henderson Street, Pontiac, MI 48341</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p class="lead">+ (248)-703-0288</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p class="lead">info@rerootpontiac.org</p>
                </li>
            </ul>
        </div>


</div>
</div>
</main>        
                
</body>    
</html>
