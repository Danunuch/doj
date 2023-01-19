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


<?php
require_once('webpanelcw/config/doj_db.php');
//error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}





if (isset($_GET['news_id'])) {
  $news = $_GET['news_id'];

  $stmt_img = $conn->prepare("SELECT * FROM news_img WHERE news_id = :img_id");
  $stmt_img->bindParam(":img_id", $news);
  $stmt_img->execute();
  $row_news_img = $stmt_img->fetchAll();

  if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ($lang == "en") {
      $stmt = $conn->prepare("SELECT * FROM news_en WHERE news_id = :news_id");
      $stmt->bindParam(":news_id", $news);
      $stmt->execute();
      $row_news = $stmt->fetch(PDO::FETCH_ASSOC);
    } else if ($lang == "cn") {
      $stmt = $conn->prepare("SELECT * FROM news_cn WHERE news_id = :news_id");
      $stmt->bindParam(":news_id", $news);
      $stmt->execute();
      $row_news = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      $stmt = $conn->prepare("SELECT * FROM news WHERE news_id = :news_id");
      $stmt->bindParam(":news_id", $news);
      $stmt->execute();
      $row_news = $stmt->fetch(PDO::FETCH_ASSOC);
    }
  } else {
    $news = $_GET['news_id'];
    $stmt = $conn->prepare("SELECT * FROM news WHERE news_id = :news_id");
    $stmt->bindParam(":news_id", $news);
    $stmt->execute();
    $row_news = $stmt->fetch(PDO::FETCH_ASSOC);
  }
}

?>

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
        <h2><?php if (isset($_GET['lang'])) {
              $lang = $_GET['lang'];
              if ($lang == "en") {
                echo "News & Blog";
              } else if ($lang == "cn") {
                echo "新聞與博客";
              } else if ($lang == "th") {
                echo "ข่าวสาร & บล็อก";
              }
            } ?></h2>


        <?php include("navigator.php"); ?>








      </div>
    </section>

    <section id="page-section">
      <div class="container-xxl">


        <h4 class="text-primary"><?php if ($lang == 'en') {
                                    echo $row_news['news_name'];
                                  } else if ($lang == 'cn') {
                                    echo $row_news['news_name'];
                                  } else {
                                    echo $row_news['news_name'];
                                  } ?></h4>




        <p>
          <?php if ($lang == 'en') {
            echo $row_news['content'];
          } else if ($lang == 'cn') {
            echo $row_news['content'];
          } else {
            echo $row_news['content'];
          } ?>
        </p>

        <div class="row  zoomimg">

          <?php for ($i = 0; $i <count($row_news_img); $i++) { ?>

            <div class="col-md-4 col-sm-6">
              <div class="view-seventh1">
                <a href="upload/g0<?= $i ?>.jpg" class="b-link-stripe b-animate-go thickbox" title="ระบบไฟฟ้าและสื่อสาร">

                  <div class="box-zoom">
                    <div class="box-zoom-img">
                      <img class="img-fluid" src="webpanelcw/upload/upload_news/<?php echo $row_news_img[$i]['image']; ?>" alt="ระบบไฟฟ้าและสื่อสาร">

                      <div class="zoom-zoom">
                        <span class="material-icons-outlined">
                          add
                        </span>
                      </div>

                    </div>

                    <div class="clearfix"></div>

                  </div>


                </a>
              </div>
            </div>

          <?php } ?>
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