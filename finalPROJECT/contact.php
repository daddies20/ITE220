<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Great-Applepiekids Limited: Kids Play around Cars</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">  
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand em-text" href="index.html">Great-Applepiekids</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php 
            if ($login_session == ''){
                echo ('<li><a href="login.php" id="login" style="color: #1caa98;">Log In</a></li>');
            }else
            {
                echo '<li><a id="welcome" style="color: #1caa98;">Welcome <b>' . $login_session . '</b></a></li>';
                echo '<li><a href="logout.php" id="logout" style="color: #1caa98;">Log Out</a></li>';
              }
             
            ?> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

      <section id="contact">
      <dv class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact Us</h1>

            </div>
            </div>
            </dv>
            </section>

            <section id ="contact">
          <div class="container">
        <div class="row">
      <div class="col-md-8">
      <br />
      
      <section>
      
      <form>
      <div class ="form-group">
      <label>Name</label>
      <input type="text" class="form-control" placeholder="Enter Name">
      </div>
      <div class="form-group">
      <label>Company Name</label>
      <input type="text" class="form-control" placeholder="Enter Company Name">
      </div>
      <div class="form-group">
      <label>Message</label>
      <textarea class="form-control" placeholder="Enter Message"></textarea>
      </div>

      <button type="submit" class="btn-default">submit</button>
      </form>

      <br/>
      </div>
      </section>


      </div>
      <div class="col-md-4">
      <br/>
       <img src="img/police.png" class="powers">

      	<h2 class="ipsum">Porsche Style</h2>
      	<p class="lorem">Limited Edition 12v Kids, Boys and Girls Porsche Style Ride on Toy, Car with Remote Control/Music/ Lights </p>

      	<a href="#" class="btn btn-default">Read More</a>
      	</div>

      
      </div>
      </div>

      </section>

     
    <footer>
    	<div class="container">
    	<div class="row">
    	<div class="col-md-6">
    	<ul>
    	<li><a herf="#">Home</a></li>
    	<li><a herf="#">About</a></li>
    	<li><a herf="#">Products</a></li>
    	<li><a herf="#">Contact</a></li>
    	<li><a herf="#">Privacy</a></li>
    	</ul>
    	</div>
    	<div class="col-md-6">
    	<p>Copyright &copy; Bathelomew 2017, All Rights Reserved</p>
    	</div>
    	</div>
    	</div>


    </footer>


      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simpleCart.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {         
    $(function(){
        var current_page_URL = location.href;

        $( "a" ).each(function() {

            if ($(this).attr("href") !== "#") {

                var target_URL = $(this).prop("href");

                    if (target_URL == current_page_URL) {
                        $('nav a').parents('li, ul').removeClass('active');
                        $(this).parent('li').addClass('active');

                        return false;
                    }
            }
        }); }); });
    </script>
    </body>
  </html>
