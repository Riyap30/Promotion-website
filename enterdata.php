<?php include('server.php')
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Entering data</title>\
  <meta charset="utf-8">
  <link rel = "icon" href =
"Screenshot (120).png"
        type = "image/x-icon">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="enterdata.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body class="form-v4">



	<form action="employees.php" method="post">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>WANT TO KNOW THE BEST?</h2>
				<p>Click the button below to see the employees and their status in your company. <B>You're just a few clicks away from knowing!</B></p>

				<div class="form-left-last">
					<input type="submit" name="account" class="account" value="Have a look">
				</div>
			</div>
		</form>

			<form class="form-detail" action="enterdata.php" method="post">
					<?php include('errors.php'); ?>
				<h2>FILL THE DETAILS</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name"/ id="first_name" class="input-text" placeholder="Enter name" value="<?php echo $first_name;?>" required >
					</div>
					<div class="form-row form-row-1">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name"/ id="last_name" class="input-text" placeholder="Enter surname" value="<?php echo $last_name;?>" required >
					</div>
				</div>
				<div class="form-row">
					<label for="your_email">Email</label>
					<input type="text" name="your_email"/ id="your_email" class="input-text"placeholder="Enter Email" value="<?php echo $your_email;?>" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
			<div class="form-row form-row-1">
						<label for="working hours" class="required">Working hours</label>
						<input type="text" name="working_hours"/ id="working_hours" placeholder="Enter number of working hours"/ value="<?php echo $working_hours;?>" required >
				</div>
					<div class="form-row form-row-1">
						<label for="internships done" class="required">Number of internships done</label>
						<input type="text" name="internships_done"/ id="internships_done" placeholder="Enter number of internships done" / value="<?php echo $internships_done;?>" required >
				</div>
					<div class="form-row form-row-1">
						<label for="successful projects" class="required">Number of successful projects</label>
						<input type="text" name="successful_projects"/ id="successful_projects" placeholder="Enter number of successful projects" / value="<?php echo $successful_projects;?>" required >
				</div>

				<div class="form-row form-row-1">
						<label for="experience" class="required">Experience(In years)</label>
						<input type="text" name="experience"/ id="experience" placeholder="Enter experience"/ value="<?php echo $experience;?>" required >
				</div>


				<div class="form-row-last">
					<input type="submit" name="enter" class="enter" value="ENTER">
				</div>
			</form>
		</div>
	</div>

	</script>

</body>
</html>
