<?php include 'summation.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Promotion Optimization</title>
  <link rel = "icon" href =
"Screenshot (120).png"
        type = "image/x-icon">
 <!--bootstrap-->
  <script src="https://kit.fontawesome.com/382a0f27c6.js" crossorigin="anonymous"></script>
<link href="sum.css" rel="stylesheet" type="text/css">
<link href="select.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  </head>

  <body>



<section id="title">
  <div class="container-fluid">



    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="C:\xampp\htdocs\new.html">  <img src="Screenshot (120).png" height="50" width="50" alt=""  <h1><font color="white">Promotion Optimization</font></h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="C:\xampp\htdocs\about.html"><font color="white">About</font></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="C:\xampp\htdocs\contact.html"><font color="white">Contact Us</font></a></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="C:\xampp\htdocs\use.html"><font color="white">How to use</font></a></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="C:\xampp\htdocs\FAQ's.html"><font color="white">F.A.Q</font></a></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
<br><br>
<div class="site-blocks-cover" style="overflow: hidden;">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">

            <img src="hero_right.png" alt="Image" class="img-fluid img-absolute">

            <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-6 mr-auto">
                <h1><?php
                //Connection for database

                $con=mysqli_connect('localhost','root','','workers');

                $sqli="SELECT first_name, last_name, sum
                FROM summation
                WHERE sum = (SELECT MAX(sum) FROM summation)";
                $result = $con->query($sqli);
                ?>

                <?php
                //Fetch Data form database
                if($result->num_rows > 0){
                $row = $result->fetch_assoc()
                ?>



                <tr><h1 class="ml9" align="center"><font color="white"><span class="text-wrapper">CONGRATULATIONS! <br></h1>
                  <h2 align="center">You can now recruit the best employee to speed up your growth!<br><BR>
                    THE PERSON YOU ARE LOOKING FOR IS<br>
                <br>
                <div class="box">
                <h2 align="center"><font color="white">
                <td><b><?php echo $row['first_name']; ?></b></td>
                <td><b><?php echo $row['last_name']; ?></b></td>

              </h2></div>
                </font>
                </span>
                </span>
                <?php
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
</h1>
              </div>


            </div>

          </div>
        </div>
      </div>
    </div>
</section>
<section id="info">
<div class="aboutus-secktion paddingTB60">
<div class="container">
    <div class="row">
              <div class="col-md-6">
                <div class="contact100-pic js-tilt" data-tilt>
                <img src="speaker.png" alt="IMG">
</div>

                </div>
                <div class="col-md-6">
                  <h1 class="strong"><font color="black">LOVED THE EXPERIENCE?<br></h1></font>
                  <div class="box">
<font color="black">
  <p><h4> We are with you in every step of the way! </p></h4>
  	<a class="button" href="#popup1"><font color="blue">EXIT</font></a>
  </div>

  <div id="popup1" class="overlay">
  	<div class="popup">
        <img src="https://media.istockphoto.com/vectors/businesswoman-in-lotus-meditation-position-in-work-office-concept-vector-id663167724?k=6&m=663167724&s=170667a&w=0&h=PrhUFQstgPwON155xCtT7NSRa59_PuquFIjzQzcbX3I=" alt="IMG">
  		<h2>Thank you!</h2>
      <h3> We are grateful to have been there as an asset for your company and look forward to this being a long term agreement.<br>
        Visit us again.
          	<a class="button" href="https://www.google.com/"><font color="blue">This way</font></a>

  		<a class="close" href="#">&times;</a>
  		<div class="content">

  		</div>
  	</div>
  </div>
</font>
</section>



                </div>
</div>
</div>
</div>
</section>

        <footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="footer-info">
            <img src="Screenshot (120).png" height="50" width="50" alt=""><h3><font color="white">Promotion Optimization</h3></font>
            <p>
              Khrishnakunj 123 <br>
              Sion, Mumabi<br><br>
              <strong>Phone:</strong> 9834894248
OR 2429803128<br>
              <strong>Email:</strong> promotionopt30@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.linkedin.com/in/promotion-optimization-39b6041a7/" class="linkedin"><i class="fab fa-linkedin"></i></a>
              <a href="https://twitter.com/PromotionOptim1" class="twitter"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="new.html">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="use.html">How to use</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="FAQ's.html">F.A.Q</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">

        </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <font color="white">  &copy; Copyright <strong><span>Riya</span></strong>. All Rights Reserved</font>
            </div>

        </div>

      </div>
    </div>
  </div>

  </div>
</footer>
