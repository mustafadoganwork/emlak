<!doctype html>
<html lang="tr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Emlak İlan</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
</head>

<body>

<?php 
include_once("include/header.php");
        include "include/db.php";
        
        $rows = $db->query("SELECT * FROM slider",PDO::FETCH_ASSOC);

    ?>
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        

    <?php foreach ($rows as $row) { ; ?>
      <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <p><?php echo $row["ust_baslik"]; ?></p>
                    <h5><?php echo $row["baslik"]; ?></h5>
                    <a href="about.php" class="btn btn-white">Daha Fazla</a>
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <h4 class="number-b"><?php echo $row["sira"]; ?></h4>
                </div>
                <div class="banhny-w3grids-1">
                  <h4><a href="#" class="hnys-title"><?php echo $row["alt_baslik"]; ?></a></h4>
                </div>
              </div>
            </div>
          </li>
      </div>
    <?php } ?>

      </div>
      <a href="#about" scroll="scroll">
        <div class="arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>
    </div>
  </section>
  <!-- /main-slider -->
  <!--/grids-->
  <?php 
        
        $rows = $db->query("SELECT * FROM index_about",PDO::FETCH_ASSOC);
        
     foreach ($rows as $row) { ; ?>
      <section class="w3l-grids-3 py-5" id="about">
        <div class="container py-md-5">
          <div class="row bottom-ab-grids align-items-center">
            <div class="col-lg-6 bottom-ab-left pr-lg-5">
              <h6 class="sub-title"><?php echo $row["ust_baslik"]; ?></h6>
              <h3 class="hny-title"><?php echo $row["baslik"]; ?></h3>
              <p class="my-3 pr-lg-4"><?php echo $row["aciklama"]; ?></p>
              <a href="about.php" class="btn btn-style btn-secondary mt-4">Read More</a>
            </div>
            <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5">
              <img src="<?php echo $row["image"]; ?>" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </section>
  <?php } ?>


  
  <!--//grids-->
  <!--/services-->
  <section class="w3l-services1">
    <div id="content-with-photo4-block" class="py-5">
      <div class="container py-md-5">
        <div class="cwp4-two row">
          <div class="cwp4-text col-lg-4 mb-lg-0 mb-5">
            <h6 class="sub-title">Ne Yapıyoruz</h6>
            <h3 class="hny-title">Size Sunduklarımız</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.
            </p>
            <a href="about.php" class="btn btn-style mt-lg-4 mt-2">Daha Fazlası</a>
          </div>

    <?php 
        
        $rows = $db->query("SELECT * FROM whatWeDo",PDO::FETCH_ASSOC);
        
      foreach ($rows as $row) { ; ?>
          <div class="cwp4-image col-lg-4 col-md-6">
            <div class="grids4-info">
              <a href="#"><img src="<?php echo $row["image"]; ?>" class="img-fluid" alt=""></a>
              <div class="info-bg">
                  <h5><a href="#"><?php echo $row["baslik"]; ?></a></h5>
                  <span class="price"><?php echo $row["fiyat"]; ?></span>
                  <p><?php echo $row["aciklama"]; ?></p>
                  <ul>
                      <li><span class="fa fa-bed"></span><?php echo $row["yatak"]; ?></li>
                      <li><span class="fa fa-bath"></span><?php echo $row["banyo"]; ?></li>
                      <li><span class="fa fa-share-square-o"></span> <?php echo $row["sq"]; ?></li>
                  </ul>
              </div>
          </div>
        </div>
      <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!--//services-->
    <!-- stats -->
    <section class="w3l-stats py-5" id="stats">
      <div class="gallery-inner container py-lg-0 py-3">
        <div class="row stats-con pb-lg-3">
          <div class="col-lg-4 col-6 stats_info counter_grid">
            <p class="counter">730</p>
            <h4>Özel Ürünler</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid1">
            <p class="counter">680</p>
            <h4>Çiftliklerimiz</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid mt-lg-0 mt-5">
            <p class="counter">812</p>
            <h4>Memnun müşteriler</h4>
          </div>
  
        </div>
      </div>
    </section>
    <!-- //stats -->

  <!--/grids2-->
  <section class="w3l-how-grids-3 py-5" id="how">
    <div class="container py-md-5">
      <div class="w3l-header mb-md-5 mb-4 text-center">
        <h3 class="hny-title">Bölgeye Göre Özellikler</h3>
      </div>
      <div class="d-grid grid-col-2 grid-element-9">
        <div class="left-grid-ele-9 grid-bg1">
          <div class="sub-wid-grid-9">
            <h4 class="text-grid-9"><a href="#">New Jersy</a></h4>
            <p class="sub-para">Mükemmel Şehir!</p>
            <span>Özellikler</span>
          </div>
        </div>
        <div class="left-grid-ele-9 grid-bg2">
          <div class="sub-wid-grid-9">
            <h4 class="text-grid-9"><a href="#">Paris</a></h4>
            <p class="sub-para">Yaşamak İçin en iyi yer</p>
            <span>Özellikler</span>
          </div>
        </div>     
        <div class="left-grid-ele-9 grid-bg3">
          <div class="sub-wid-grid-9">
            <h4 class="text-grid-9"><a href="#">İstanbul</a></h4>
            <p class="sub-para">Mükemmel Şehir</p>
            <span>Özellikler</span>
          </div>
        </div>
        <div class="left-grid-ele-9 grid-bg4">
          <div class="sub-wid-grid-9">
            <h4 class="text-grid-9"><a href="#">Malatya</a></h4>
            <p class="sub-para">Yaşamak İçin en iyi yer</p>
            <span>Özellikler</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//grids2-->

<!-- pricing11 -->
<section class="w3l-pricing-11">
	<div class="pricing11 py-5">
		<div class="container py-md-4">
        <div class="w3l-header mb-md-5 mb-4 text-center">
          <h3 class="hny-title">Fiyatlandırma paketleri</h3>
        </div>
			<div class="pricing11-content">
      <?php 
        
        $rows = $db->query("SELECT * FROM price",PDO::FETCH_ASSOC);
        
      foreach ($rows as $row) { ; ?>
				<div class="column pricing-grid">
					<div class="text-center price-icon">
						<span class="fa fa-home"></span>
					</div>
					<div class="rate">
						<h4><?php echo $row["paket"]; ?></h4>
						<h5><span class="top-align"></span><?php echo $row["fiyat"]; ?></span></h5>
					</div>
					<p><?php echo $row["aciklama"]; ?></p>
					<button class="button">Paketi Seç</button>
					<div class="text-center">
						<a href="#" class="action">Şimdi Satın Al </a>
					</div>
					<ul class="points">
						<li><span class="fa fa-check"></span> Etiam mollis lacus.</li>
						<li><span class="fa fa-check"></span> Sed tincidunt, nisl vitae mattis.</li>
						<li><span class="fa fa-check"></span> Morbi sed sem ac odio.</li>
						<li><span class="fa fa-check"></span> Aenean et tellus tincidunt.</li>
					</ul>
					<div class="text-center pos">	
						<a href="contact.php" class="action"> Bizimle İletişime Geçin</a>
					</div>
				</div>
        <?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- //pricing11 -->

  <!--/get -->
  <section class="w3l-grid-quote text-center py-5">
    <div class="container py-3">
      <h6 class="sub-title text-center">BİZİMLE ÇALIŞIN</h6>
      <h3 class="hny-title mb-md-5 mb-4">Bir Proje Başlatalım!</h3>
      <a href="contact.php" class="btn btn-style btn-outline-primary">İletişime Geç</a>
    </div>
  </section>
  <!--//get -->
  <!--/w3l-footer-29-main-->
  

  <?php include_once("include/footer.php"); ?>


  <!--//w3l-footer-29-main-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 2,
            nav: false
          },
          1000: {
            items:2,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!-- video popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>
  <!-- //video popup -->
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>