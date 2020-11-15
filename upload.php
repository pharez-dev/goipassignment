

<?php
$target_dir = "./uploadfiles/";
$target_file = $target_dir . basename($_FILES["cv"]["name"]);
$uploadOk = 1;
$errMessage = "";
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);



// Check if file is a document
if($fileType != "doc" && $fileType != "docx" && $fileType != "pdf") {
    $errMessage .= "Sorry, only Word Document and PDF files are allowed! <br /> ";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    $errMessage .= "Sorry, a file with a similar name(".$_FILES["cv"]["name"].") already exists! <br />";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk ==1) {
    // if everything is ok, try to upload file
   if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
  //  echo "The file ". basename( $_FILES["cv"]["name"]). " has been uploaded!";
} else {
    $errMessage .= "Sorry, there was an error uploading your file! <br />";
    echo $errMessage;
}


} 

?>
