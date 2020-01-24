<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reroot Pontiac GI - Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Evan H.">
    <meta name="description" content="Reroot Pontiac's Green Infrastructure Site">
    <meta name="keywords" content="Reroot Pontiac, Green Infrastructure, Green Technology">
    <meta name="theme-color" content="#000000">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome Icons and CSS-->   
    <script src="https://kit.fontawesome.com/8c89b82d38.js" crossorigin="anonymous"></script>
    <!-- FontAwesome Social Media Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts - Karma -->    
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <!-- styles CSS file -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/icons/green-leave.ico">
    <!-- apple-touch Icon--> 
   <link rel="apple-touch-icon" href="images/apple-touch-icon-iphone-60x60.png">
</head>    
<body>
<?php

  
// Define variables    
    
$name = $email = $subject = $message = "";
$nameErr = $emailErr = $subjectErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);
//  $file = test_input($_POST["file"]);
    
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
    <div class="card mb-4 bg-Green rounded">  
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="contact-form" name="contact-form" enctype="multipart/form-data" class="mt-4 ml-3 mr-3 p-3">
            <fieldset>
              <legend class="undrline">Personal Information:</legend>
            <div class="form-group">
            <span class="error">*</span>
            <label for="name" class="font-weight-bolder">Name:</label> <span class="error"> <?php echo $nameErr;?></span> 
            <input type="text" id="name" name="name" class="form-control input-name mb-4" placeholder="Enter your Name" required>
            </div>
                             
            <div class="form-group">
            <span class="error">*</span>  
            <label for="email" class="font-weight-bolder">E-Mail:</label> <span class="error"> <?php echo $emailErr;?></span>       
            <input type="text" id="email" name="email" class="form-control input-email mb-4" placeholder="Enter your E-Mail" required>
            </div>
             
            <div class="form-group">
            <span class="error">* <?php echo $subjectErr;?></span>             
            <label for="subject" class="font-weight-bolder">Subject:</label>  <span class="error"> <?php echo $subjectErr;?></span>   
            <input type="text" id="subject" name="subject" class="form-control input-subjct mb-4" placeholder="Enter your Subject line" required>
            </div>
                   
            <div class="form-group">
            <span class="error">* <?php echo $messageErr;?></span>            
            <label for="message" class="font-weight-bolder">Message:</label> <span class="error"> <?php echo $messageErr;?></span>        
            <textarea type="text" id="message" name="message" rows="10" cols="30" class="form-control mb-4" placeholder="Your message goes here..." required></textarea>
            </div>
            
            <!-- Upload file(s) form input field-->
            
          <!--  <label for="uploadFile" class="font-weight-bolder">Attachments:</label>
            <input id="uploadFile" placeholder="Choose File" name="file" class="input-file">
        <div class="fileUpload btn btn-primary btn-rounded">
          <span>Upload</span>
          <input id="uploadBtn" type="file" class="upload float-left" name="file[]" aria-label="Upload file" multiple>
        </div> -->
            
            <div class="text-center">
                <button type="submit" class="btn btn-submit float-left mb-4" name="btnSubmit">Send</button>
            </div>    
                                           
          </fieldset>                                                                                     
          </form>
          </div>       
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

if (isset($_POST["btnSubmit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
    $body = '<!DOCTYPE html> <html>
        <body>
         <h2>Reroot Pontiac GI</h2>
         <hr>
          <p>Name: <br>'.$name.' </p>
          <p>Name: <br>'.$subject.' </p>
          <p>E-Mail: <br>'.$email.' </p>
         <p> Message: <br>'.$message.' </p>
        </body>
    </html>';
//    $file = $_POST["file"];
//    $htmlContent = file_get_contents("email-template.html");
	$toEmail = "info@rerootpontiac.org";
    $mailHeaders = "MIME-Version: 1.0" . "\r\n";
    $mailHeaders .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
	$mailHeaders .= "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $body, $mailHeaders)) {
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
<!-- Popper.JS-->
<script src="js/Popper.js"></script>
 
<!-- Bootstrap minified JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
<!-- Website's JS -->    
<script src="js/Site.js"></script>                                 
                
</body>    
</html>
