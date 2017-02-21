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

    <section id="title-bar">
    <dv class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>About AutoKids</h1>

          </div>
          </div>
          </dv>
          </section>

    

    <section id ="about">
    <div class="container">
    <div class="row">
    <div class="col-md-8">
    <h2> Who We Are </h2>
    <p> We began making toys that “appeal to the imagination, that do something new and surprising and funny. Great ride on car for a child and equally entertaining for adults who wants to play along through remote control operation.
Our ride on car comes with (2) 12V motors and features two speeds: 2mph and 4mph.
Comes with a forward/backward switch, MP3 Aux jack and cable with built-in speakers, and remote control for wireless operation.
Adjustable seatbelt to keep your child safe as they ride around in their brand new car
Includes working headlights, horn, musical tunes, and MP3 aux jack & cable. Today, our goals continue to be enriching the lives of young families, and bringing joy to generations. We hope you enjoy reading our stories. </p>
<br/>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Why buy a remote controlled power wheel?
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            Children have always looked to adults and envied them for the freedom they have. Grown-ups have jobs and can afford their own cars. But how can children legally get their own set of wheels? Power Wheel cars! Parents can purchase these miniature vehicles for their children, which they can then use to drive throughout the neighborhood and show off how much like an adult they are..
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Remote Control Power Wheels: What to Look For
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            Power Wheel cars may all offer the same driving experience, but there are several things you should know about them when you plan to buy one. As you research vehicles for your child, you should pay special attention to the following criteria:
            <br />

            <h2>Design</h2> <br />
Most Power Wheel vehicles are designed to be miniature replicas of "grown up" vehicles such as a Ford Mustang, Jeep or Hummer. A Power Wheels vehicle's ability to imitate an adult driving experience for your child will make all the difference. How the vehicle looks, all the way down to the decals you can use, is indicative of its quality.
<br />

<h2>Battery</h2><br />
Power Wheel cars are powered by electric batteries, which means the strength and size of the battery will influence the vehicle's speed and power. The size of a Power Wheels vehicle's battery is largely indicative of its battery life and the speeds it can reach. 6-volt batteries typically allow a vehicle to travel at around 2.5-MPH for just over an hour. A 12-volt battery will allow your child to drive for upwards of three hours at speeds of 5-MPH.
<br />

<h2>Warranty</h2> <br />
Not all Power Wheel cars come with a warranty, but you'll want to consider this because it will help counterbalance additional future expenses. It isn't uncommon for parts within the motor or battery to fail. In these cases, the cost of replacing those parts can be quite expensive, especially if you have to pay to replace them yourself.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Reliability
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            You want a vehicle that will last longer than a single summer. Some Power Wheel vehicles suffer from the design flaw of a short life span, so you'll want to do your homework to make sure the vehicle you get your child won't die soon after the warranty expires.

Give your child the best experience possible when you purchase a Power Wheels car. You should choose one that will not only be enjoyable, but will also keep your child safe if you live in a high-traffic area.
          </div>
        </div>
      </div>
    </div>

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
