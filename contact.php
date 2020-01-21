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

  
// Define variables
$name = $email = $subject = $message = $file = "";
$nameErr = $emailErr = $subjectErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);
  $file = test_input($_POST["file"]);
    
  if (empty($_POST["name"])) {
    $nameErr = "";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
 if (empty($_POST["subject"])) {
    $subjectErr = "";
  } else {
    $subject = test_input($_POST["subject"]);
  }
    
 if (empty($_POST["message"])) {
    $messageErr = "";
  } else {
    $message = test_input($_POST["message"]);
  }    
    
}
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    
?>

<main id="mainContent" tabindex="-1">
<div class="container-fluid">
<div class="row">
<!-- https://mdbootstrap.com/docs/jquery/forms/contact/#antispam -->     
<div class="col-md-12">
<section>
   <h1 class="font-weight-bold text-center">Contact Us</h1>
    <img src="images/logo_2.png" alt="Reroot Pontiac's Logo" class="logo-contact mx-auto d-block">
    <hr>
    <p class="text-center">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
    <p class="text-center"><span class="error">* Required field</span></p>    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="contact-form" name="contact-form" enctype="multipart/form-data">
            <fieldset>
              <legend class="undrline">Personal Information:</legend>
            <div class="form-group">
            <span class="error">* <?php echo $nameErr;?></span>  
            <label for="name" class="font-weight-bolder">Name:</label>  
            <input type="text" id="name" name="name" class="form-control input-name" placeholder="Enter your Name" value="<?php echo $name;?>"><br>
            </div>
                             
            <div class="form-group">
            <span class="error">* <?php echo $emailErr;?></span> 
            <label for="email" class="font-weight-bolder">E-Mail:</label>        
            <input type="text" id="email" name="email" class="form-control input-email" placeholder="Enter your E-Mail" value="<?php echo $email;?>"><br>
            </div>
             
            <div class="form-group">
            <span class="error">* <?php echo $subjectErr;?></span>             
            <label for="subject" class="font-weight-bolder">Subject:</label>     
            <input type="text" id="subject" name="subject" class="form-control input-subjct" placeholder="Enter your Subject line" value="<?php echo $subject;?>"><br>
            </div>
                   
            <div class="form-group">
            <span class="error">* <?php echo $messageErr;?></span>            
            <label for="message" class="font-weight-bolder">Message:</label>        
            <textarea type="text" id="message" name="message" rows="10" cols="30" class="form-control" placeholder="Your message goes here..."><?php echo $message;?></textarea>
            </div>
            
            <!-- Upload file(s) form input field-->
            
          <!--  <label for="uploadFile" class="font-weight-bolder">Attachments:</label>
            <input id="uploadFile" placeholder="Choose File" name="file" class="input-file">
        <div class="fileUpload btn btn-primary btn-rounded">
          <span>Upload</span>
          <input id="uploadBtn" type="file" class="upload float-left" name="file[]" aria-label="Upload file" multiple>
        </div> -->
            
            <div class="text-center marg-botm">
                <button type="submit" class="btn btn-submit float-left" name="btnSubmit">Send</button>
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
<?php
    
    
/* Upload functionality */    
//include "upload.php";
    
//echo "<h2>Your Input:</h2>";
//echo $name;  
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $subject;
//echo "<br>";
//echo $message;
//echo "<br>";
//echo $file;

if(!empty($_POST["contact-form"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
//    $file = $_POST["file"];

	$toEmail = "info@rerootpontiac.org";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
	    echo "E-Mail sent successfully!";
	}
    else {
        echo "Error occurred - E-Mail Failure";
    }
}    
    
    
?>        
</div>
</div>
</main>
               
  <!-- jQuery -->   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
 <!-- Popper.JS-->
 <script src="js/Popper.js"></script>
 
 <!-- Bootstrap minified JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 <!-- Website's JS -->    
 <script src="js/Site.js"></script>                               
                
</body>    
</html>
