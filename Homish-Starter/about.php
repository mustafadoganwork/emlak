<?php include "include/db.php"; ?>
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

  <?php include_once("include/header.php"); ?>

   <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">Hakkımızda</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Anasayfa</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Hakkımızda </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /about-6-->
  <section class="w3l-cta4 py-5">
      <div class="container py-lg-5">
        <div class="ab-section text-center">
          <h3 class="hny-title">Herkes Ev Fırsatını Hak Eder</h3>
          <p class="py-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
            aspernatur fugiat minima blanditiis dignissimos.</p>
            <div class="row mt-5 text-center">
              <div class="col-md-6">
                <img src="assets/images/banner3.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-md-6 mt-md-0 mt-4">
                <img src="assets/images/banner2.jpg" class="img-fluid" alt="">
              </div>
            </div>
        </div>

      </div>
  </section>
  <!-- //about-6-->
   <!-- /content-6-->
   <section class="w3l-content-6 py-5" id="why">
    <div class="container py-lg-5">
      <div class="row">
        <div class="col-lg-4 content-6-left">
          <h3 class="hny-title">Neden Bizi Seçmelisiniz.</h3>
        </div>
        <div class="col-lg-4 content-6-right mt-lg-0 mt-4">
          <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
            aspernatur fugiat minima blanditiis dignissimos.</p>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
              aspernatur fugiat minima blanditiis dignissimos.</p>
            
        </div>
        <div class="col-lg-4 content-6-right mt-lg-0 mt-4">
          <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
            aspernatur fugiat minima blanditiis dignissimos.</p>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
              aspernatur fugiat minima blanditiis dignissimos.</p>
            
        </div>
      </div>
    </div>
</section>
<!-- //content-6-->
  <!-- stats -->
  <section class="w3l-statshny py-5" id="stats">
    <div class="container py-lg-5 py-md-4">
      <div class="w3-stats-inner-info">
        <div class="row">
          <div class="col-lg-4 col-6 stats_info counter_grid text-left">
            <span class="fa fa-smile-o"></span>
            <p class="counter">1730</p>
            <h4>Mutlu Müşteri</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid1 text-left">
            <span class="fa fa-users"></span>
            <p class="counter">730</p>
            <h4>Proje</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid mt-lg-0 mt-5 text-left">
            <span class="fa fa-database"></span>
            <p class="counter">30</p>
            <h4>Şube</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
  <!-- team -->
  <section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div class="title-content text-center mb-lg-3 mb-4">
          <h6 class="sub-title">Takımımız</h6>
          <h3 class="hny-title">Temsilcilerimizle Tanışın</h3>
        </div>
        <div class="row">
      <?php 
        
      $rows = $db->query("SELECT * FROM about_team",PDO::FETCH_ASSOC);
        
      foreach ($rows as $row) { ; ?>
          <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="<?php echo $row["image"]; ?>" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url"><?php echo $row["name"]; ?></a></h3>
                <ul class="social">
                  <li>
                    <a href="<?php echo $row["facebook"]; ?>" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $row["twitter"]; ?>" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- //team -->

  <!--/w3l-footer-29-main-->

  <?php include_once("include/footer.php"); ?>


  <!--//w3l-footer-29-main-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
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