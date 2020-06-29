<?php
error_reporting(0);
session_start();
$errors = array();
$email= '';

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'workers');

// REGISTER USER
if (isset($_POST['Subscribe'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['email']);



  }
  if (empty($email)) { array_push($errors); }


  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM newsletter WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);


if($user){
    if ($user['email'] === $email) {
      array_push($errors);
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO newsletter (email)
  			  VALUES('$email')";
  	mysqli_query($db, $query);


  }
  	if(isset ($_SESSION['success'])){
       echo "Email entered successfully";
}

?>
