<?php
$username = $_POST['username'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$healthissue = $_POST['healthissue'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
if (!empty)($username) || !empty)($mobilenumber) || !empty)($email) || !empty)($healthissue)  || !empty)($password) || !empty)($confirmpassword) ) {
  $host = "local instance";
  $dbusername = "root";
  $dbpassword = "khushimysql";
  $dbname ="register";
  //create connection
  $conn = new mysqli($host, $dbusername, $dbpassword, $dbname );
  if (mysqli_connect_error()){
    die('Connect Error('mysqli_connect_error()')'mysqli_connect_error());
  }else {
    $SELECT = " SELECT email From register Where email = ? Limit 1";
    $INSERT = " INSERT Into register (username, mobilenumber, email, healthissue, password, confirmpassword ) values (?,?,?,?,?,?)";
    //prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->blind_param("s", $email);
    $stmt->execute();
    $stmt->blind_result( $email);
    $stmt->store_result();
    $rnum= $stmt->num_rows;
    if ($rnum==o) {

      $stmt->close();

      $stmt = $conn->prepare($INSERT);
      $stmt->blind_param ("sissss" , $username, $mobilenumber, $email, $healthissue, $password, $confirmpassword);
      $stmt->execute();
      echo "New Record Inserted Successfully";
    } else {
      echo "This emai is already registered";
    }
    $stmt->close();
    $conn->close();
  }
}
else {
  echo "all fields are required";
  die();
}
 ?>
