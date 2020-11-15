<?php
try {
//handle file upload file
include 'upload.php';


// Initialize sql connection
$mysqli = new mysqli("localhost","pharez","@45123fs2dff","goipassignment");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
//Get form values
$fname = $mysqli -> real_escape_string( $_POST['fname']);
$lname =$mysqli -> real_escape_string( $_POST['lname']);
$email = $mysqli -> real_escape_string($_POST['email']);
$number = (int) $mysqli -> real_escape_string($_POST['number']);
$dob = $mysqli -> real_escape_string($_POST['dob']);
$cv =$target_file;
$password = $mysqli -> real_escape_string($_POST['password']);
$range =  (int)$mysqli -> real_escape_string( $_POST['range']);
$terms = $mysqli -> real_escape_string($_POST['terms']);
$terms = $terms=="on"?true:false;

//Generating salt and  hashing password password
$salt = sha1(md5($password));
$password = md5($password.$salt);

//Insert values into db if file was uploaded
if($uploadOk==1)
{
if(isset($fname)&& isset($lname)&&isset($email)&&isset($number)&&isset($dob)&&isset($cv)&&isset($password)&&isset($range)&&isset($terms)){
    
    $sql="INSERT INTO goip (Firstname, Lastname, Email, Randomnumber, DOB, Cv, Password, Experience, Agreedtoterms) VALUES ('$fname', '$lname', '$email', '$number','$dob' , '$cv', '$password', '$range', '$terms')";
 
    if (!$mysqli -> query($sql) && ($uploadOk == 1)) {
      // echo  $mysqli->error;
    }
    if($mysqli->error){
       $errMessage .=(string) $mysqli->error."!<br />";
       unlink($cv);
    }
    $mysqli -> close();
}
}
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>GoIP Assignment</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <style>
      body {
        background-color: #fcfcfc;
      }
      .center-content {
          position: absolute;
          left: 50%;
          top: 50%;
          -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          text-align:center;
          font-size:20px;
      }
</style>
</head>
<body>
<div class="center-content">
<?php
if($errMessage!==""){
   echo "<p style='color:red;'>". $errMessage."</p>";
   echo "<button onclick='goBack()' type='button' class='btn btn-outline-danger waves-effect'>Go Back</button>";
}else{
 echo " <p style='color:green' >Success, your information has been saved!</p>";
  echo "<a href='/goip'><button type='button' class='btn btn-outline-success waves-effect'>Go Back</button></a>";
}

?>    

</div>


  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script>
  function goBack() {
    window.history.back();
  } 
  </script>
</body>
</body>
</html>