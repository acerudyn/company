<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCKS | Product</title>
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
								<li role="presentation"><a href="contact.php" >Contact</a></li>
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
						<h2>Product</h2>
					</div>
					<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
						<p>Beberapa produk dan solusi yang disediakan adalah solusi EDC, Pinpad, MPOS, TCR,
              KiosK, Mesin Antrian, dan Produk perbankan lainnya.</p>
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
				<div class="row">
					<div class="portfolio-items">

<?php
/*
$per_hal = 12;
$jumlah_record = pg_query("SELECT COUNT(*) from produk ");
$jum = pg_fetch_result($jumlah_record, 0);
$halaman = ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
*/

$connection = pg_connect("host=localhost port=5433 dbname=skcsdb user=postgres password=akhirudin");
$sql = "select * from produk order by merk";
$result  = pg_query($connection, $sql);
while( $data = pg_fetch_array($result) ){
?>

<!-- menampilkan daftar produk menggunakan php -->
						<div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="../admin/img/produk/<?php echo $data[5] ?>" alt=""
                                     width="290" height="220">
								<div class="overlay">
									<div class="recent-work-inner">
                                        <!-- Hover Product-->
										<h3><a href="#"><?php echo $data[2] ?></a></h3>
										<p><?php echo substr($data[4],0,117); ?></p>
                    <a class="preview" href="detail.php?id=<?php echo $data[0] ?>"><i class="fa fa-eye"></i> View More |</a>
										<a class="preview" href="../admin/img/produk/<?php echo $data[5] ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View Image</a>
									</div>
								</div>
							</div>
						</div><!--/.portfolio-item-->
<?php } ?>

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
