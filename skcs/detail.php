<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCKS | Detail Product</title>
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

    <!-- =======================================================
        Theme Name: SKCS
        Theme URL: https://skcs.co.id
    ======================================================= -->
  </head>
  <body>
	<header>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="../index.html"><img src="images/logo_skcs.png" alt="" height="50" width="120"></a>
						</div>
					</div>

					<div class="navbar-collapse collapse">
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="../index.html" >Home</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>
								<li role="presentation"><a href="portofolio.php" class="active">Product</a></li>
								<li role="presentation"><a href="contact.php">Contact</a></li>
                <li role="presentation"><a href="news.php" >News</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

    <!-- Our product -->
		<section id="portfolio">
        <div class="container">
			<div class="col-lg-12">
				<div class="text-center">
					<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<h2>Detail Product</h2>
					</div>
					<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
						<p>We provide a variety of brands, EDC of the most popular products</p>
					</div>
				</div>

                <!-- Category Product -->
				<ul class="portfolio-filter text-center">
          <li><a class="btn btn-default" href="portofolio.php" data-filter="*">All Product</a></li>
					<li><a class="btn btn-default" href="gallery.php?id=edc">EDC & Pinpad</a></li>
					<li><a class="btn btn-default" href="gallery.php?id=ups">UPS</a></li>
					<li><a class="btn btn-default" href="gallery.php?id=tcr">TCR</a></li>
          <li><a class="btn btn-default" href="gallery.php?id=kiosk">KiosK</a></li>
				</ul><!--/#portfolio-filter-->

                <!-- Photos Rows -->

                <?php
                $id = $_GET['id'];
                include "../admin/controller/koneksi.php";
                $sql = "select * from produk where produk_id = '$id' ";
                $result = mysql_query($sql);
                $myData = mysql_fetch_array($result);
                ?>

<!-- menampilkan daftar produk menggunakan php -->
            <div class="col-lg-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.5s">
                <div class="text-center">
                    <img src="../admin/img/produk/<?php echo $myData['gambar'] ?>" width="600" height="400"
                         style="box-shadow: 0px 0px 23px 1px rgba(0,0,0,0.75);">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.5s">
                <div class="text-center" style="text-align : left;">
                    <h4><?php echo $myData['nama_produk'] ?></h4>
                    <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
                       <p><?php echo $myData['spesifikasi'] ?><br></p>
                    </div>
                </div>
            </div>
			</div>
        </div>
    </section><!--/#portfolio-item-->

	<footer>
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						&copy; 2016 PT. SKCS | All Rights Reserved.
                        <div class="credits">
                            <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Multi
                            -->
                            Designed by <a href="#">Acerudyn</a>
                        </div>
					</div>
					<div class="col-md-6">
						<ul class="pull-right">
              <li><a href="../index.html">Home</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="portofolio.php" class="active">Proudct</a></li>
							<li><a href="contact.php">Contact</a></li>
              <li><a href="news.php">News</a></li>
						</ul>
					</div>
				</div>
				<div class="pull-right">
					<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
				</div>
			</div>
		</div>
	</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
  <script src="js/prettyPhoto.js"></script>
	<script>wow = new WOW({}).init();</script>

</body>
</html>
