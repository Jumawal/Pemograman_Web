<!DOCTYPE html>
<html lang="en">
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #04513a;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #04513a;
  }
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Turnament</title>
       <link href="<?php echo base_url();?>template/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>template/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>template/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>template/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>template/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>template/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>template/js/html5shiv.<?php echo base_url();?>template/js"></script>
    <script src="<?php echo base_url();?>template/js/respond.min.<?php echo base_url();?>template/js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>template/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<div class="container">
  <div class="modal" id="theModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;" >
          <form action="<?php echo base_url().'index.php/login/aksi_login'; ; ?>" method="post">
            <div class="form-group">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button style="background: #04513a;" type="submit" class="btn btn-success btn-block" value="Login"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button style="background: #04513a;" type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      </div>
  </div>
</div>
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +6285 213 063 453</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>index.php"><img src="<?php echo base_url();?>template/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav" >
                        <li><a href="<?php echo base_url();?>" >Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/aboutus">About Us</a></li>
                        <li><a href="<?php echo base_url();?>index.php/misi">Visi & Misi</a></li>
                        <li ><a href="<?php echo base_url();?>index.php/Daftar/tambah">Daftar</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kegiatan<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>index.php/seminar">Seminar</a></li>
                                <li  class="active"><a href="<?php echo base_url();?>index.php/turnament">Turnament</a></li>
                                
                            </ul>
                        </li> 
                        <li><a href="<?php echo base_url();?>index.php/contact">Contact</a></li> 
                        <li class="clr2"><a href="#signin" data-toggle="modal" data-target="#theModal">Login</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->


</head>
    <body style="background: #ffffff";>
        <div style="width: 360px; height: 500px; background:#ffffff; float: left;"><br><br><br><br>
            <a style="margin-left: 25px; " class="navbar-brand" href="http://stiki.ac.id"><img src="<?php echo base_url();?>template/images/stiki.png " alt="logo"></a>
        </div>
        <div id="wrap" style="float :left; font-family:bold; width: 600px; height: 100%px; margin-top: 20px; background:#eee; ">
        
        <div id="content" style="padding: 20px; margin-top: 20px;">
            <center>
                
                <h3 style="color: black; font-size: 30px; font-family:bold; ">Turnament EST Brawijaya</h3>
            </center>
            
                <div style="margin-top: 30px; width: 530px; height: 250px; background: #eee; background-image: url(<?php echo base_url();?>template/images/slider/img21.jpg)">
                </div>
            
        </div>

                <div style=" color: black; font-size: 15px; margin-right: 5px; margin-left: 10px">
                   <h3 style="font-family: bold; font-size: 17px; color: black; margin-left: 5px;">Tampil Apik Lawan Universitas Brawijaya Futsal(UBF),Team SFC Dapat Pujian</h3>
                    <p><?php foreach($posting as $a){ ?></p>
                        <p><?php echo $a->deskrifsi; ?></p>
                    <?php } ?>
               </div> 
        </div>


        <div style="width: 240px; height: 500px; background: #ffffff; float: left;">
            <center><br><br>
                <h2 style="color: black; font-family: bold;">Postingan Terbaru :</h2>
                <li><a href="<?php echo base_url();?>index.php/turnament" style="font-size: 20px; color: black; font-family: bold;">Turnament est Brawijaya</a></li>  
            </center>
        </div>
    </body>
    </header><!--/header-->
     <center>
    <section id="portfolio">
        <div class="container">
            <div class="center">
        </div>
    </center>
</div>

    <section id="bottom" style="margin-top: 20px;">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url();?>template/js/jquery.js"></script>
    <script src="<?php echo base_url();?>template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>template/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>template/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url();?>template/js/main.js"></script>
    <script src="<?php echo base_url();?>template/js/wow.min.js"></script>
</body>
</html>
