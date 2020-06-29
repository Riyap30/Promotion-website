
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Promotion Optimization</title>
<meta charset="utf-8">
<link rel = "icon" href =
"Screenshot (120).png"
      type = "image/x-icon">
 <!--bootstrap-->
  <script src="https://kit.fontawesome.com/382a0f27c6.js" crossorigin="anonymous"></script>
<link href="employees.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
<section id="title">
  <div class="container-fluid">



    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="new.html">  <img src="Screenshot (120).png" height="50" width="50" alt=""  <h1><font color="white">Promotion Optimization</font></h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html"><font color="white">About</font></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html"><font color="white">Contact Us</font></a></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="use.html"><font color="white">How to use</font></a></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FAQ's.html"><font color="white">F.A.Q</font></a></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container text-center text-md-left" data-aos="fade-up">





  </div>
<br><br><br><br><br><br><br>
<section id="card">
<div class="card-deck">
  <div class="card bg-light">
    <div class="card-body text-center">
            <img src="happy-employees.jpg" class="card-img-top" alt="...">
      <p class="card-text">Add more entries</p>
      <a href="enterdata.php" class="btn btn-primary">ADD</a>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-body text-center">
        <img src="unnamed.jpg" class="card-img-top" alt="...">
      <p class="card-text">Know the result</p>

                <a href="http://localhost/select.php" class="btn btn-primary">RESULT</a>
    </div>
  </div>
</section>


</section>


        <section id="img">

        <?php
      //Connection for database
      include 'connection.php';
      //Select Database
      $sql = "SELECT * FROM enterdata";
      $result = $con->query($sql);
      ?>
      <!doctype html>
      <html>
      <body>
      <h1 align="center">Employees Details</h1>
      <table border="1" align="center" width="1300px" style="line-height:25px;">
      <tr>
      <th><b>First Name</th>
      <th><b>Last Name</th>
      <th><b>Email</th>
      <th>Working hours</th>
      <th>Internships done</th>
      <th>Successful projects</th>
      <th>experience</th></b>
      </tr>
      <?php
      //Fetch Data form database
      if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
      ?>
      <tr>
      <td><b><?php echo $row['first_name']; ?></b></td>
      <td><b><?php echo $row['last_name']; ?></b></td>
      <td><b><?php echo $row['your_email']; ?></b></td>
      <td><b><?php echo $row['working_hours']; ?></b></td>
      <td><b><?php echo $row['internships_done']; ?></b></td>
      <td><b><?php echo $row['successful_projects']; ?></b></td>
      <td><b><?php echo $row['experience']; ?></b></td>
      </tr>
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
</section>

  </body>
