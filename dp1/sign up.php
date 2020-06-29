<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  	<?php include('server1.php'); ?>
      	<?php include('server2.php'); ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">

body{
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
}







</style>



</head>
<body>

<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">

<h1 class="text-center text-success"> Register here</h1>
<br/>

<div class="col-sm-12">

  <ul class="nav nav-pills" >



    <li class="" style="width:50%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#home">Doctor</a></li>

    <li class=" " style="width:48%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu1">patient</a></li>



  </ul>

<br/>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

<form action="#">

	<?php include('errors.php'); ?>
  <div class="form-group">
    <label for="UserName">Doctor-name</label>
    <input type="text" class="form-control" <?php echo $doctor; ?> id="email">
  </div>

  <div class="form-group">
    <label for="Mobile numbe">Mobile number</label>
    <input type="text" class="form-control" <?php echo $doctormobile; ?> id="email">
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" <?php echo $doctoremail; ?> id="email">
  </div>

  <div class="form-group">
    <label for="Qualification">Qualification</label>
    <input type="text" class="form-control" <?php echo $qualification; ?>id="email">
  </div>

  <div class="form-group">
    <label for="Speciality">Speciality</label>
    <input type="text" class="form-control" <?php echo $speciality; ?> id="email">
  </div>

  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" <?php echo $password1; ?> id="pwd">
  </div>

  <div class="form-group">
    <label for="pwd">Confirm Password</label>
    <input type="password" class="form-control"<?php echo $password2; ?>  id="pwd">
  </div>



<button type="submit" class="btn btn-default">Submit</button>
  <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>

</form>
<br/>
<a href="login.html" class="pull-right btn btn-block btn-danger" > Already Register ?   </a>



    </div>

    <div id="menu1" class="tab-pane fade">

<form action="insert.php" method= "POST">

  <div class="form-group">
    <label for="UserName">UserName</label>
    <input type="text" name="username" class="form-control" <?php echo $username; ?> id="email" required>
  </div>

  <div class="form-group">
    <label for="Mobile number">Mobile number</label>
    <input type="text" name="mobileumber"class="form-control" <?php echo $mobile; ?> id="email" required>
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email"<?php echo $email; ?> required>
  </div>

  <div class="form-group">
    <label for="Health issue">Health issue</label>
    <input type="text" name="healthissue" class="form-control" id="email" <?php echo $issue; ?> required>
  </div>

  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" name="password" class="form-control" <?php echo $password1; ?> id="pwd" required>
  </div>

  <div class="form-group">
    <label for="pwd">Confirm Password</label>
    <input type="password" name="confirmpassword" class="form-control" <?php echo $password2; ?> id="pwd" required>
  </div>



  <button type="submit" class="btn btn-default">Submit</button>

  <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>

</form>
<br/>
<a href="login.html" class="pull-right btn btn-block btn-success" > Already Register ?   </a>






    </div>
   </div>
  </div>
</div>
</div>
<!-- This design is created by manoj chauhan  -->
</body>
</html>
