<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reroot Pontiac GI - Corporate contact</title>
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
<main id="mainContent" tabindex="-1">
<div class="container-fluid">
<div class="row">
<!-- https://mdbootstrap.com/docs/jquery/forms/contact/#antispam -->     
<div class="col-md-12">
<section>
   <h1 class="font-weight-bold text-center">Contact Us</h1>
    <img src="images/logo_2.png" alt="Reroot Pontiac's Logo" class="logo-contact mx-auto d-block">
    <?php

  
// Define variables    
    
$compname = $email = $subject = $city = $state = $attends = $message = "";
$compnameErr = $emailErr = $subjectErr = $cityErr = $stateErr = $attendErr = $messageErr = "";
$success_message = "<strong class='mr-2'>E-Mail sent successfully!</strong> <a href='index.html' class='alert-link'><span class='mr-2'><i class='fas fa-home'></i></span>Back to Home!</a>";
$error_message = "Error occurred - E-Mail Failure";
    
if (isset($_POST["btnSubmit"])) {
	$compname = $_POST["compname"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
    $city = $_POST["city"];
    $state = $_POST["state"]; 
    $attends = $_POST["attends"];
	$message = $_POST["message"];
    
    
  if (empty($_POST["compname"]) ?? "") {
    $compnameErr = " A Company Name is Required!";
  } else {
    $compname = test_input($_POST["compname"]);
  }
  
  if (empty($_POST["email"]) ?? "") {
    $emailErr = "E-Mail is Required!";
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",$email)) {
      $emailErr = "Enter a valid E-Mail!"; 
       }
  }
    
 if (empty($_POST["subject"]) ?? "") {
    $subjectErr = "A Subject is Required!";
  } else {
    $subject = test_input($_POST["subject"]);
  }
    
 if (empty($_POST["city"])) {
    $cityErr = "";
  } else {
    $city = test_input($_POST["city"]);
  }
    
 if (empty($_POST["state"])) {
    $stateErr = "";
  } else {
    $state = test_input($_POST["state"]);
  }
    
 if (empty($_POST["attends"])) {
    $attendErr = "";
  } else {
    $attends = test_input($_POST["attends"]);
  }     
    
 if (empty($_POST["message"]) ?? "") {
    $messageErr = "Message is Required!";
  } else {
    $message = test_input($_POST["message"]);
  }

if ( ($compname != '') && ($email != '' && (filter_var ($email, FILTER_VALIDATE_EMAIL)) ) && ($subject != '') && ($message != '') ) {     
    $body = '<!DOCTYPE html> <html>
        <body>
         <h2>Reroot Pontiac GI</h2>
         <hr>
          <p>Company Name: <br>'.$compname.' </p>
          <p>Subject: <br>'.$subject.' </p>
          <p>E-Mail: <br>'.$email.' </p>
          <p>City: <br>'.$city.' </p>
          <p>State: <br>'.$state.' </p>
          <p>Attendee List: <br>'.$attends.' </p>
          <p>Message: <br>'.$message.' </p>
        </body>
    </html>';
//    $file = $_POST["file"];
//    $htmlContent = file_get_contents("email-template.html");
	$toEmail = "info@rerootgi.com";
    $mailHeaders = "MIME-Version: 1.0" . "\r\n";
    $mailHeaders .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
	$mailHeaders .= "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $body, $mailHeaders)) {
	    echo "<div class='alert alert-success alert-dismissible fade show mt-3' role='alert' id='success'><button type='button' class='close' aria-label='Close' title='Close'> <span aria-hidden='true'>&times;</span> </button> $success_message</div>";
	}
    else {
        echo "<div class='alert alert-danger alert-dismissible fade show mt-3' role='alert' id='fail'><button type='button' class='close' aria-label='Close' title='Close'> <span aria-hidden='true'>&times;</span> </button> $error_message</div>";
}    
}
}
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    
    
/* Upload functionality */    
//include "upload.php";
    
//echo "<h2>Your Input:</h2>";
//echo $compname;  
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $subject;
//echo "<br>";
//echo $city;
//echo "<br>";
//echo $state;
//echo "<br>";
//echo $attends;
//echo "<br>";
//echo $message;
//echo "<br>";    
//echo $file;

    
?>
    <hr>
    <p class="text-center">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
    <p class="text-center"><span class="error">* Required field</span></p> 
    <div class="card mb-4 bg-Green rounded">  
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="contact-form" name="contact-form" enctype="multipart/form-data" class="mt-4 ml-3 mr-3 p-3">
            <fieldset>
              <legend class="undrline">Corporate Information:</legend>
            <div class="form-group">
            <span class="error">*</span>
            <label for="compname" class="font-weight-bolder">Company Name:</label> <span class="error"> <?php echo $compnameErr;?></span> 
            <input type="text" id="compname" name="compname" class="form-control input-name mb-4" placeholder="Enter your Company Name" autofocus>
            </div>
                             
            <div class="form-group">
            <span class="error">*</span>  
            <label for="email" class="font-weight-bolder">E-Mail:</label> <span class="error"> <?php echo $emailErr;?></span>       
            <input type="text" id="email" name="email" class="form-control input-email mb-4" placeholder="Enter your E-Mail">
            </div>
             
            <div class="form-group">
            <span class="error">*</span>             
            <label for="subject" class="font-weight-bolder">Subject:</label>  <span class="error"> <?php echo $subjectErr;?></span>   
            <input type="text" id="subject" name="subject" class="form-control input-subjct mb-4" placeholder="Enter your Subject line">
            </div>
                  
            <div class="form-group">             
            <label for="city" class="font-weight-bolder">City:</label>  <span class="error"> <?php echo $cityErr;?></span>   
            <input type="text" id="city" name="city" class="form-control input-city mb-4" placeholder="Enter your City">
            </div>
            
<div class="form-group">
<label for="state" class="font-weight-bolder">State:</label>  <span class="error"> <?php echo $stateErr;?></span>         
<select class="form-control" name="state" id="state">
    <option value="" selected>Select</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
</div>                      
                  
            <div class="form-group">          
            <label for="attends" class="font-weight-bolder">Attendees:</label> <span class="error"> <?php echo $attendErr;?></span>        
            <textarea type="text" id="attends" name="attends" rows="10" cols="30" class="form-control mb-4" placeholder="Enter your list of attendees"></textarea>
            </div>           
                   
            <div class="form-group">
            <span class="error">*</span>            
            <label for="message" class="font-weight-bolder">Message:</label> <span class="error"> <?php echo $messageErr;?></span>        
            <textarea type="text" id="message" name="message" rows="10" cols="30" class="form-control mb-4" placeholder="Your message goes here..."></textarea>
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