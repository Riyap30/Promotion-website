<?php
$con=mysqli_connect('localhost','root','','workers');


//Select Database
$first_name="";
$last_name="";
$working_hours = "";
$internships_done = "";
$successful_projects = "";
$experience = "";
$sqli = "SELECT first_name, last_name, working_hours, internships_done, successful_projects, experience FROM enterdata";
$result = $con->query($sqli);
?>


<?php
//Fetch Data form database

while($row = $result->fetch_assoc()){
?>
<?php
$a = array($row['working_hours'], $row['internships_done'], $row['successful_projects'], $row['experience']);
$sum=(array_sum($a));
$first_name=$row['first_name'];
$last_name= $row['last_name'];

 $sql = mysqli_query($con, "INSERT INTO summation (first_name, last_name, sum) VALUES ('$first_name',' $last_name', '$sum')") or die ("unable to execute the query");
 
}
?>
