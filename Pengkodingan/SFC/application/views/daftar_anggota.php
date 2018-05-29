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
  .box-body{
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
  }
  .box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar Anggota</title>
	
	<!-- core <?php echo base_url();?>template/css -->
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
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button style="background: #04513a;" type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
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
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>+62 8521 3063 453</p></div>
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

        <nav class="navbar navbar-inverse" role="banner" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>index.php/home_login"><img src="<?php echo base_url();?>template/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav" >
                        <li><a href="<?php echo base_url();?>index.php/home_login" >Home</a></li>
                        
                        <li ><a href="<?php echo base_url();?>index.php/daftar_iuran">Daftar Iuran</a></li>
                        <li class="active"><a href="<?php echo base_url();?>index.php/daftar_anggota">Anggota</a></li>
                        <li ><a href="<?php echo base_url();?>index.php/pengurus">Pengurus</a></li>
                         <li ><a href="<?php echo base_url();?>index.php/Jadwal">Jadwal Latihan</a></li>
                        <li ><a href="<?php echo base_url();?>index.php" >Log Out</a></li>                         
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->

    <section id="about-us" style="background: #4e4e4e; color: white;">
        <div class="container">
			<div class="center wow fadeInDown">
                
       
       


<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h2>Daftar Anggota</h2>
            </div>
            <div class="box-body">
                <table class="table table-striped" style="background: cyan; color: black; font-size: 15px; text-align: center; " border="4">
                    <tr style="color: black;">
                        <th>Id Anggota</th>
                        <th>Nama</th>
                        <th>Nrp</th>
                        <th>Angkatan</th>
                        <th>Jurusan</th>
                        <th>Jenis Kelamin</th>
                        <th>Tlpn</th>
                        <th>Alamat</th>
                        
                      
                    </tr>
                    <?php foreach($anggotaku as $a){ ?>
                    <tr>
                        <td><?php echo $a['id_anggota']; ?></td>
                        <td><?php echo $a['nama']; ?></td>
                        <td><?php echo $a['nrp']; ?></td>
                        <td><?php echo $a['angkatan']; ?></td>
                        <td><?php echo $a['jurusan']; ?></td>
                        <td><?php echo $a['jenis_kelamin']; ?></td>
                        <td><?php echo $a['tlpn']; ?></td>
                        <td><?php echo $a['alamat']; ?></td>
                        
                       
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

 </div>


    </section>
			
    <section id="bottom">
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
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="<?php echo base_url();?>template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>template/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>template/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url();?>template/js/main.js"></script>
    <script src="<?php echo base_url();?>template/js/wow.min.js"></script>
</body>
</html>