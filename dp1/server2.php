
<?php
session_start();

$doctor = "";
$doctormobile    = "";
$doctoremail = "";
$qualification   = "";
$speciality = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration1');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $doctor = mysqli_real_escape_string($db, $_POST['doctor']);
  $doctormobile = mysqli_real_escape_string($db, $_POST['doctormobile']);
  $doctoremail = mysqli_real_escape_string($db, $_POST['doctoremail']);
    $qualificatin = mysqli_real_escape_string($db, $_POST['qualification']);
  $speciality = mysqli_real_escape_string($db, $_POST['speciality']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
   }
  if (empty($doctoremail)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE  doctoremail='$doctoremail' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (doctor, doctormobile, doctoremail, qualification, speciality)
  			  VALUES('$doctor', '$doctormobile', '$doctoremail', '$qualification', '$speciality',)";
  	mysqli_query($db, $query);

  	$_SESSION['success'] = "Records entered";
  	header('location: signup.php');
  }
}



// LOGIN USER


?>
