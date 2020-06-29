<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "promotion opt", "data1234", "work");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$first_name = ($link, $_POST['first_name']);
$last_name = ($link, $_POST['last_name']);
$your_email = ($link, $_POST['your_email']);
$working_hours = ($link, $_POST['working_hours']);
$internships_done = ($link, $_POST['internships_done']);
$successful_projects = ($link, $_POST['successful_projects']);
$experience = ($link, $_POST['experience']);

// Attempt insert query execution
$sql = "INSERT INTO enterdata (first_name, last_name, your_email, working_hours, internships_done, successful_projects, experience) VALUES ('$first_name', '$last_name', '$your_email', '$working_hours', '$internships_done', '$successful_projects', '$experience')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
