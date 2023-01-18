<?php
require_once('webpanelcw/config/doj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}


if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM about_us_en");
    $stmt->execute();
    $row_about_us = $stmt->fetch(PDO::FETCH_ASSOC);
  } else if ($lang == "cn") {
    $stmt = $conn->prepare("SELECT * FROM about_us_cn");
    $stmt->execute();
    $row_about_us = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
    $stmt = $conn->prepare("SELECT * FROM about_us");
    $stmt->execute();
    $row_about_us = $stmt->fetch(PDO::FETCH_ASSOC);
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM about_us");
  $stmt->execute();
  $row_about_us = $stmt->fetch(PDO::FETCH_ASSOC);
}



?>

<!DOCTYPE html>
<html lang="en" class="desktop">

<head>

  <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=0.85">
  <meta name="description" content="DOJ INDUSTRIAL (ดอจ อุตสาหการ)">
  <meta name="keyword" content="DOJ INDUSTRIAL (ดอจ อุตสาหการ)">
  <meta name="author" content="DOJ INDUSTRIAL (ดอจ อุตสาหการ)">

  <title>DOJ INDUSTRIAL (ดอจ อุตสาหการ)</title>

	<link rel="shortcut icon" href="images/logo.png" type="image/png">

  <link href="css/spinner.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">




</head>



<body>
  <!-- Pre loader -->
  <div class="spinner" id="loading-body">
    <div>
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>


  <?php include("header.php"); ?>

  <main>
    <section id="section-texthaed" class="bg-parallax" style="background:url(upload/section-texthaed.jpg) no-repeat top center;background-size:cover">
      <div class="container-xxl">
        <h2><?php if ($lang == 'en') {
              echo "About Us";
            } else if ($lang == 'cn') {
              echo "關於我們";
            } else {
              echo "เกี่ยวกับเรา";
            } ?></h2>


        <?php include("navigator.php"); ?>


      </div>
    </section>
    <section id="page-section">
      <div class="container-xxl">
        <p><?php if ($lang == 'en') {
              echo $row_about_us['content'];
            } else if ($lang == 'cn') {
              echo $row_about_us['content'];
            } else {
              echo $row_about_us['content'];
            } ?>
        </p>

        <br>
        <div class="text-center">
          <img class="img-fluid" src="webpanelcw/upload/upload_about_us/<?php echo $row_about_us['img']; ?>">
        </div>
      </div>
    </section>


  </main>

  <?php include("footer.php"); ?>

  <script src="js/core.min.js"></script>
  <script src="js/script.min.js"></script>

  <script src="js/jquery.min.js"></script>

  <script type="text/javascript">
    'use strict';
    var $window = $(window);
    $window.on({
      'load': function() {

        /* Preloader */
        $('.spinner').fadeOut(1500);




      },

    });
  </script>



</body>

</html>