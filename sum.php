<?php
$con=mysqli_connect('localhost','root','','workers');


//Select Database
$first_name="";
$last_name="";
$working_hours = "";
$internships_done = "";
$successful_projects = "";
$experience = "";
$sql = "SELECT first_name, last_name, working_hours, internships_done, successful_projects, experience FROM enterdata";
$result = $con->query($sql);
?>


<?php
//Fetch Data form database
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<?php
$a = array($row['working_hours'], $row['internships_done'], $row['successful_projects'], $row['experience']);
$sum=(array_sum($a));
$first_name=$row['first_name'];
$last_name= $row['last_name'];

  	$query = "INSERT INTO summation (first_name, last_name, sum);
  			  VALUES('$first_name','$last_name', '$sum')";
  	mysqli_query($con, $query);

?>
<?php
}
}
else
{
?>
<tr>
<th colspan="2">There's No data found!!!</th>
</tr>
<?php
}

?>
