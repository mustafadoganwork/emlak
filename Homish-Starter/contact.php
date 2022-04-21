<?php
if(isset($_POST["gonder"])){
  include "include/db.php";
  $sql = "INSERT INTO `contact` (`ID`, `name`, `phone`, `email`, `note`) VALUES (NULL, ?, ?, ?, ?);";
  $dizi = [
		$_POST["name"],
		$_POST["phone"],
		$_POST["email"],
		$_POST["note"]
	];
  $sth = $db->prepare($sql);
	$sonuc = $sth->execute($dizi);
	header("Location:contact.php");

}

?>

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
include "include/header.php";
        include "include/db.php";
        
        $rows = $db->query("SELECT * FROM office",PDO::FETCH_ASSOC);

    ?>

  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">İletişim</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="index.php">Anasayfa</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> İletişim </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!--/contact-->
   <section class="w3l-contact-11 py-5">
    <div class="contacts-main py-lg-5 py-md-4">
      <div class="title-content text-center">
        <h6 class="sub-titlehny">İletişim</h6>
        <h3 class="hny-title">Bizimle İletişime Geçin</h3>
    </div>
      <div class="form-41-mian section-gap mt-5">
        <div class="container">
          <div class="d-grid align-form-map">
            <div class="form-inner-cont">

              <form method="post">
                <div class="form-input">
                  <label>İsim ve Soyisim</label>
                  <input type="text" name="name" placeholder="Adınızı ve soyadınızı giriniz..."/>
                </div>
                <div class="form-input">
                  <label>Telefon</label>
                  <input type="text" name="phone" placeholder="Telefon numaranızı giriniz..."/>
                </div> 
                <div class="form-input">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Email adresinizi giriniz..."/>
                </div>
                <div class="form-input">
                  <label>Mesajınız</label>
                  <textarea name="note" placeholder="Mesajınızı giriniz..."></textarea>
                </div>
                <div class="form-submit text-right">
                    <button type="submit" class="btn btn-style btn-primary" name="gonder">Gönder</button>
                  </div>
              </form>

            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200342.34343123232!2d38.2869355212217!3d38.317745575957964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076397401c2315f%3A0x93eaa7bba6f06166!2sMalatya%20Merkez!5e0!3m2!1str!2str!4v1650511159064!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="contant11-top-bg mt-lg-5 mt-4">
        <div class="container">
          <div class="d-grid contact pt-lg-4">
            <div class="contact-info-left d-grid text-left">


              <?php foreach ($rows as $row) { ; ?>
              <div class="contact-info mt-4">
                <h4><?php echo $row["city"]; ?></h4>
                <p class="mb-3"><label>Adres: </label> <?php echo $row["adres"]; ?></p>
                <p class="mb-3"><label>Email : </label> <?php echo $row["email"]; ?></p>
                <p class="mb-3"><label>Telefon : </label> <?php echo $row["phone"]; ?></p>
                 <p class="mb-3"><label>Çalışma Saatleri : </label><?php echo $row["hours"]; ?></p>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!--//contact-->
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