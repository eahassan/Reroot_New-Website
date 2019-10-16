<?php

/* https://code.tutsplus.com/tutorials/how-to-upload-a-file-in-php-with-example--cms-31763 */
$target_dir = "uploads/";
$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['pdf','docx','doc','txt','jpeg','jpg','png']; // Get all the file extensions

$fileName = $_FILES['file']['name'][$i];
$countfiles = count($_FILES['file']['name']);
$fileSize = $_FILES['file']['size'];
$fileTmpName  = $_FILES['file']['tmp_name'];
$fileExtension = strtolower(end(explode('.',$fileName)));
$target_file = $target_dir . basename($_FILES["file"]["name"][$i]);
$uploadOk = 1;

if(!empty($_FILES['file'])) {
    
     for($i=0;$i<$countfiles;$i++){
 
 
  // Upload file
      if (move_uploaded_file($fileTmpName[$i], $target_dir .$fileName)) {
        echo "Your file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    }    
 
 }

    

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($fileSize > 500000) {
    echo "Sorry, your file is too large.";
    $errors[] = "This file is more than 5MB. Sorry, it has to be less than or equal to 5MB";
    $uploadOk = 0;
}
// Allow certain file formats
if (! in_array($fileExtension,$fileExtensions)) {
    $errors[] = "This file extension is not allowed. Please upload a *pdf, *docx, *doc, *txt, *jpeg, or *png' file";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
 else {
        echo "Sorry, there was an error uploading your file.";
           foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
    }
}


?>