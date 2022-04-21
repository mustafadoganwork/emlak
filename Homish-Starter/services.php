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
      <div class="container">
        <h2 class="title">Hizmetler</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Anasayfa</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Hizmetler </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- call to action 5 -->
  <section class="w3l-cta5">
    <div class="call-to-action-5 py-5">
      <div class="container py-lg-5">
        <div class="call-to-action-5-content text-center">
          <h3 class="hny-title">Gayrimenkul Almanın En iyi Yolu</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
            nostrum aliquam!</p>
          <a href="#url" class="btn btn-style btn-primary mb-4">Daha Fazla</a>
          <div class="three-grids row">
            <div class="col-lg-4 col-md-6 grid mt-md-0 mt-4">
              <div class="icon">
                <span class="fa fa-rebel" aria-hidden="true"></span>
              </div>
              <div class="icon-info">
                <h4><a href="#">Dizayn</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
                  nostrum aliquam!</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grid mt-md-0 mt-4">
              <div class="icon">
                <span class="fa fa-line-chart" aria-hidden="true"></span>
              </div>
              <div class="icon-info">
                <h4><a href="#">Strateji</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
                  nostrum aliquam!</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 grid">
              <div class="icon">
                <span class="fa fa-rocket" aria-hidden="true"></span>
              </div>
              <div class="icon-info">
                <h4><a href="#">Pazarlama</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
                  nostrum aliquam!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /call to action 5 -->
  <section class="w3l-features14">
    <div class="w3l-feature-6-main py-5">
      <div class="container py-lg-5">
        <div class="wrapper-max">
          <div class="header-section text-center mb-5">
            <h3 class="hny-title two">
              Sunduğumuz Hizmetler
            </h3>
          </div>
          <div class="grid mt-lg-4">
            <div class="w3l-feature-6-gd">
              <div class="icon"><span class="fa fa-renren"></span></div>
              <div class="w3l-feature-6-gd-info">
                <h3><a href="#url">Kiralık Mülkler</a></h3>
                <p class="pr-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore.Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
            </div>
            <div class="w3l-feature-6-gd">
              <div class="icon"><span class="fa fa-home"></span></div>
              <div class="w3l-feature-6-gd-info">
                <h3><a href="#url">Lüks Villalar</a></h3>
                <p class="pr-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore.Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
            </div>
            <div class="w3l-feature-6-gd">
              <div class="icon"><span class="fa fa-building-o"></span></div>
              <div class="w3l-feature-6-gd-info">
                <h3><a href="#url">Satılık Mülkler</a></h3>
                <p class="pr-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore.Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
            </div>
            <div class="w3l-feature-6-gd">
              <div class="icon"><span class="fa fa-building"></span></div>
              <div class="w3l-feature-6-gd-info">
                <h3><a href="#url">Satılık Daireler</a></h3>
                <p class="pr-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore.Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--/-->
  <!--/services-->
  <section class="w3l-services1">
    <div id="content-with-photo4-block" class="py-5">
      <div class="container py-md-5">
        <div class="header-section text-center mb-5">
          <h3 class="hny-title">
            Kiralık Evler
          </h3>
        </div>
        <div class="cwp4-two row">


        <?php 
        
        $rows = $db->query("SELECT * FROM services",PDO::FETCH_ASSOC);
          
        foreach ($rows as $row) { ; ?>
          <div class="cwp4-image col-lg-4 col-md-6 mt-4">
            <div class="grids4-info">
              <a href="#"><img src="<?php echo $row["image"]; ?>" class="img-fluid" alt=""></a>
              <div class="info-bg">
                <h5><a href="#"><?php echo $row["title"]; ?></a></h5>
                <span class="price"><?php echo $row["price"]; ?></span>
                <p><?php echo $row["aciklama"]; ?></p>
                <ul>
                  <li><span class="fa fa-bed"></span><?php echo $row["yatak"]; ?></li>
                  <li><span class="fa fa-bath"></span><?php echo $row["banyo"]; ?></li>
                  <li><span class="fa fa-share-square-o"></span><?php echo $row["sq"]; ?></li>
                </ul>
              </div>
            </div>
          </div>

        <?php } ?>         

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//services-->
  <!--/w3l-footer-29-main-->

  <?php include_once("include/footer.php"); ?>
  
  <!--//w3l-footer-29-main-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
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