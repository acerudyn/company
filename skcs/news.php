<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SKCS | News</title>
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
								<li role="presentation"><a href="portofolio.php" >Product</a></li>
								<li role="presentation"><a href="contact.php">Contact</a></li>
                <li role="presentation"><a href="news.php" class="active" >News</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

      <!-- News -->
	<section id="blog" class="container">
        <div class="text-center">
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h2>News</h2>
			</div>
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
				<p>The latest news about EDC and modern payment technology</p>
			</div>
		</div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">

                   <?php
                   /*
                   $per_hal = 2;
                   $jumlah_record = pg_query("SELECT COUNT(*) from produk ");
                   $jum = pg_fetch_result($jumlah_record, 0);
                   $halaman = ceil($jum / $per_hal);
                   $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                   $start = ($page - 1) * $per_hal;
                   */
                   include "../admin/controller/koneksi.php";
                   $sql = "select * from berita order by berita_id desc limit 2";
                   $result  = mysql_query($sql);
                   while( $data = mysql_fetch_array($result) ){
                   ?>

                    <div class="blog-item">
                        <div class="row">
                            <!-- Date Coment & Like -->
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo $data['tanggal'] ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#">Akhirudin</a></span>
                                    <span><i class="fa fa-comment"></i> <a href="#">7 Comments</a></span>
                                    <span><i class="fa fa-heart"></i><a href="#">13 Likes</a></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img width="600" height="350"  alt="" class="img-blog" src="../admin/img/berita/<?php echo $data['gambar'] ?>" /></a>
                                <h4><?php echo $data['judul'] ?></h4>
                                <p><?php echo $data['isi_berita'] ?></p>
                                <a class="btn btn-primary readmore" href="<?php echo $data['referensi'] ?>" target="_blank">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!--/.blog-item-->
                    <?php
                  } ?>

                     <!-- Page of News-->
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <!-- Kategori -->
                    <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="gallery.php?id=edc">EDC
                                      <?php
                                      $sql = "select * from produk where merk='edc' ";
                                      $result  = mysql_query($sql);
                                      $edc = mysql_num_rows($result);
                                      ?>
                                      <span class="badge"><?php echo $edc ?></span></a></li>
                                    <li><a href="gallery.php?id=ups">UPS
                                      <?php
                                      $sql = "select * from produk where merk='ups' ";
                                      $result  = mysql_query($sql);
                                      $ups = mysql_num_rows($result);
                                      ?>
                                      <span class="badge"><?php echo $ups ?></span></a></li>
                                    <li><a href="gallery.php?id=tcr">TCR
                                      <?php
                                      $sql = "select * from produk where merk='tcr' ";
                                      $result  = mysql_query($sql);
                                      $tcr = mysql_num_rows($result);
                                      ?>
                                       <span class="badge"><?php echo $tcr ?></span></a></li>
                                    <li><a href="gallery.php?id=kiosk">KiosK
                                      <?php
                                      $sql = "select * from produk where merk='kiosk' ";
                                      $result  = mysql_query($sql);
                                      $kiosk = mysql_num_rows($result);
                                      ?>
                                      <span class="badge"><?php echo $kiosk ?></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.categories-->

                    <!-- Archives -->
    				<div class="widget archieve">
                        <h3>Archieve</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2016 <span class="pull-right">(37)</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2016 <span class="pull-right">(13)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2016 <span class="pull-right">(23)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2016 <span class="pull-right">(11)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.archieve-->

                    <!-- Tag News-->
                    <div class="widget tags">
                        <h3>Tag Cloud</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-primary" href="https://wwww.ingenico.com" target="_blank">Ingenico</a></li>
                            <li><a class="btn btn-xs btn-primary" href="http://www.verifone.com" target="_blank">Verifone</a></li>
                            <li><a class="btn btn-xs btn-primary" href="http://www.pax.com.cn" target="_blank">Pax</a></li>
                            <li><a class="btn btn-xs btn-primary" href="http://www.gloryglobalsolutions.com" target="_blank">Glory</a></li>
                            <li><a class="btn btn-xs btn-primary" href="http://www.gtec-power.com" target="_blank">Gtec</a></li>
                            <li><a class="btn btn-xs btn-primary" href="gallery.php?id=kiosk">KiosK</a></li>
                            <li><a class="btn btn-xs btn-primary" href="gallery.php?id=tcr">TCR</a></li>
                            <li><a class="btn btn-xs btn-primary" href="gallery.php?id=ups">UPS</a></li>
                            <li><a class="btn btn-xs btn-primary" href="gallery.php?id=edc">EDC</a></li>
                        </ul>
                    </div><!--/.tags-->

                    <!-- Gallery -->
    				<div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        <ul class="sidebar-gallery">
                            <li><a href="#"><img src="images/blog/gallery1.jpg" alt="" height="100" width="170" style="border-radius : 5px;" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery2.jpg" alt="" height="100" width="170" style="border-radius : 5px;" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery3.jpg" alt="" height="100" width="170" style="border-radius : 5px;" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery4.jpg" alt="" height="100" width="170" style="border-radius : 5px;" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery5.jpg" alt="" height="100" width="170" style="border-radius : 5px;" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery6.jpg" alt="" height="100" width="170" style="border-radius : 5px;" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery7.jpg" alt="" height="100" width="170" style="border-radius : 5px;" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery8.jpg" alt="" height="100" width="170" style="border-radius : 5px;" /></a></li>
                        </ul>
                    </div><!--/.blog_gallery-->
    			</aside>
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

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
              <li><a href="portofolio.php">Proudct</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="news.php" class="active">News</a></li>
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
	<script src="js/functions.js"></script>
	<script>wow = new WOW({}).init();</script>

</body>
</html>
