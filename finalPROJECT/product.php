<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Great-Applepiekids Limited: Kids Play around Cars</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simpleCart.js"></script>
    <style type="text/css">
        table {
            width: 100%;
        }
        
        td {
            width: 1%;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand em-text" href="index.html">Great-Applepiekids</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="product.php">Products</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/logoo.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/kars4kids.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/kc.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row" id="displayProduct" style="display:flex; flex-wrap: wrap;">

                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail" style="height: 100px">
                    <h4><span class="simpleCart_quantity"></span> items - <span class="simpleCart_total"></span></h4>
                    <div class="simpleCart_items"></div>
                    <div class="btn-group btn-group-justified" style="margin-top:36px">
                        <a href="#" class="btn btn-danger btn-xs simpleCart_empty"><span class="glyphicon glyphicon-remove-sign "></span> Empty cart</a>
                        <!-- create a checkout button -->
                        <a href="#" class="btn btn-primary btn-xs simpleCart_checkout"><span class="glyphicon glyphicon-ok-sign"></span> Checkout</a>
                        <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#view">View cart</a>
                    </div>
                </div>
            </div>
            <!-- View cart modal -->
            <div id="view" class="modal fade" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="thumbnail">
                                <h4><span class="simpleCart_quantity"></span> ITEMS - <span class="simpleCart_total"></span></h4>
                                <div class="simpleCart_items" style="display: inline-block;"></div>
                                <div class="button-group">
                                    <a href="#" class="btn btn-danger btn-xs simpleCart_empty"><span class="glyphicon glyphicon-remove-sign "></span> Empty cart</a>
                                    <!-- create a checkout button -->
                                    <a href="#" class="btn btn-primary btn-xs simpleCart_checkout pull-right"><span class="glyphicon glyphicon-ok-sign"></span> CHECKOUT</a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
    <!-- /.container -->
    <div class="container">

        <hr>

        <!-- Footer -->


    </div>
    <!-- /.container -->    
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
    
    <script type="text/javascript">
        $(document).ready(function() {
            $(function() {
                var current_page_URL = location.href;

                $("a").each(function() {

                    if ($(this).attr("href") !== "#") {

                        var target_URL = $(this).prop("href");

                        if (target_URL == current_page_URL) {
                            $('nav a').parents('li, ul').removeClass('active');
                            $(this).parent('li').addClass('active');

                            return false;
                        }
                    }
                });
            });
        });
    </script>

    <script>
        simpleCart({
            checkout: {
                type: "PayPal",
                email: "you@yours.com"
            },

            cartStyle: "table",
            cartColumns: [{
                attr: "name",
                label: "Name"
            }, {
                attr: "price",
                label: "Price",
                currency: "฿",
                view: 'currency'
            }, {
                view: "decrement",
                label: false,
                text: "-"
            }, {
                attr: "quantity",
                label: "Qty"
            }, {
                view: "increment",
                label: false,
                text: "+"
            }, {
                attr: "total",
                label: "SubTotal",
                currency: "฿",
                view: 'currency'
            }, {
                view: "remove",
                text: "Remove",
                label: false
            }]
        });
    </script>
</body>
<script>
    var products = [{
        itemName: "Mercedez Benz",
        Description: "Convertible",
        price: 500,
        images: "img/benz.png"
    }, {
        itemName: "G-Wagon",
        Description: "4 Door Convertible AMG",
        price: 2500,
        images: "img/benz_jeep.png"
    }, {
        itemName: "Bentley",
        Description: "2 Seat Convertible",
        price: 800,
        images: "img/betly.png"
    }, {
        itemName: "Mercedez Benz",
        Description: "Convertible",
        price: 500,
        images: "img/benz.png"
    }, {
        itemName: "Bentley",
        Description: "Pink Convertible",
        price: 750,
        images: "img/bettle.png"
    }, {
        itemName: "Range Rover",
        Description: "Black Edition Evoque",
        price: 3500,
        images: "img/site_jeep.png"
    }, {
        itemName: "Range Rover",
        Description: "Evoque",
        price: 3500,
        images: "img/landrover.png"
    }, {
        itemName: "BMW X6",
        Description: "Convertible 2 Seaters",
        price: 1500,
        images: "img/blue_bmw.png"
    }];

    var displayContainer = document.getElementById('displayProduct');
    for (var data in products) {
        var items = products[data];
        html = '<div class="col-sm-4 col-lg-4 col-md-4">' +
            '<div class="thumbnail">' +
            '<img src="' + items.images + '" alt="">' +
            '<div class="caption simpleCart_shelfItem">' +
            '<h4 class="pull-right item_price">$' + items.price + '</h4>' +
            '<h4 class="item_name">' + items.itemName + '</h4>' +
            '<p>' + items.Description + '</p>' +
            '<a class="btn btn-primary item_add" href="javascript:;"> Add to Cart </a>' +
            '</div>' +
            '</div>' +
            '</div>';
        displayContainer.innerHTML += html;
    }
</script>

</html>