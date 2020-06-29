<?php
session_start();


$errors = array();
$first_name = "";
$last_name = "";
$your_email = "";
$working_hours = "";
$internships_done = "";
$successful_projects = "";
$experience = "";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'workers');

// REGISTER USER
if (isset($_POST['enter'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $your_email = mysqli_real_escape_string($db, $_POST['your_email']);
  $working_hours = mysqli_real_escape_string($db, $_POST['working_hours']);
  $internships_done = mysqli_real_escape_string($db, $_POST['internships_done']);
  $successful_projects = mysqli_real_escape_string($db, $_POST['successful_projects']);
  $experience = mysqli_real_escape_string($db, $_POST['experience']);


  }
  if (empty($first_name)) { array_push($errors); }
if (empty($last_name)) { array_push($errors); }
if (empty($your_email)) { array_push($errors); }
if (empty($working_hours)) { array_push($errors); }
if (empty($internships_done)) { array_push($errors); }
if (empty($successful_projects)) { array_push($errors); }
if (empty($experience)) { array_push($errors); }
if ($experience === '0') {
      array_push($errors, "Field cannot be vacant");
    }
    if ($working_hours === '0') {
          array_push($errors, "Field cannot be vacant");
        }
        if ($internships_done === '0') {
              array_push($errors, "Field cannot be vacant");
            }
            if ($successful_projects === '0') {
                  array_push($errors, "Field cannot be vacant");
                }
  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM enterdata WHERE  your_email='$your_email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);


if($user){
    if ($user['your_email'] === $your_email) {
      array_push($errors);
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO enterdata (first_name, last_name, your_email, working_hours, internships_done, successful_projects, experience)
  			  VALUES('$first_name', '$last_name', '$your_email', '$working_hours', '$internships_done', '$successful_projects', '$experience')";
  	mysqli_query($db, $query);

   $del= "DELETE from enterdata WHERE experience=0";
   mysqli_query($db, $del);
  	$_SESSION['success']="";


}

?>
