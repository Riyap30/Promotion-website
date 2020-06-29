<?php
$con= mysqli_connect("localhost", "promotion opt", "data1234", "work")or die(mysqli_error($con));
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$your_email=$_POST['your_email'];
$working_hours=$_POST['working_hours'];
$internships_done=$_POST['internships_done'];
$successful_projects=$_POST['successful_projects'];
$experience=$_POST['experience'];
$query="SELECT * FROM enterdata where your_email='$your_email'";
$res=mysqli_query($con, $query)or die("failed".mysqli_error($con));
$array=mysqli_fetch_array($res);
$num=mysqli_num_rows($res);
if($num)
{
  echo "<h3>Employee already exists! Try another name.</h3>";
}
else{
  $insert = "insert into enterdata values('$first_name', '$last_name', '$your_email', '$working_hours', '$internships_done', '$successful_projects', '$experience')";
  $r = mysqli_query($con,$insert) or die("failed".mysqli_error($con));

}
?>
