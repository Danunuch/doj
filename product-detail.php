<?php
require_once('webpanelcw/config/doj_db.php');
//error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}




if (isset($_GET['product_id'])) {
  $product = $_GET['product_id'];

  $stmt_img = $conn->prepare("SELECT * FROM product_img WHERE product_id = :img_id");
  $stmt_img->bindParam(":img_id", $product);
  $stmt_img->execute();
  $row_product_img = $stmt_img->fetchAll();

  if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ($lang == "en") {
      $stmt = $conn->prepare("SELECT * FROM product_en WHERE product_id = :product_id");
      $stmt->bindParam(":product_id", $product);
      $stmt->execute();
      $row_product = $stmt->fetch(PDO::FETCH_ASSOC);
    } else if ($lang == "cn") {
      $stmt = $conn->prepare("SELECT * FROM product_cn WHERE product_id = :product_id");
      $stmt->bindParam(":product_id", $product);
      $stmt->execute();
      $row_product = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      $stmt = $conn->prepare("SELECT * FROM product WHERE product_id = :product_id");
      $stmt->bindParam(":product_id", $product);
      $stmt->execute();
      $row_product = $stmt->fetch(PDO::FETCH_ASSOC);
    }
  } else {
    $product = $_GET['product_id'];
    $stmt = $conn->prepare("SELECT * FROM product WHERE product_id = :product_id");
    $stmt->bindParam(":product_id", $product);
    $stmt->execute();
    $row_product = $stmt->fetch(PDO::FETCH_ASSOC);
  }
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
        <h2><?php if (isset($_GET['lang'])) {
              $lang = $_GET['lang'];
              if ($lang == "en") {
                echo "Product";
              } else if ($lang == "cn") {
                echo "表現";
              } else if ($lang == "th") {
                echo "ผลิตภัณฑ์";
              }
            } ?></h2>


        <?php include("navigator.php"); ?>








      </div>
    </section>

    <section id="page-section">
      <div class="container-xl">
        <div class="text-center mb-5">
          <div class="page-header">
            <h3><?php
                echo $row_product['product_name'];
                ?></h3>
          </div>
          <br>
          <p>
            <?php
            echo $row_product['intro'];
            ?>
          </p>

        </div>

        <div class="row">

          <div class="item-material">


            <div class="col-img single-item">
              <?php for ($i = 0; $i < count($row_product_img); $i++) { ?>
                <div class="pe-0 ps-0">
                  <img class="img-fluid" src="webpanelcw/upload/upload_product/<?php
                                                                                echo $row_product_img[$i]['image'];
                                                                                ?>">
                </div>
              <?php } ?>
            </div>



            <div class="col-text">
              <h4><?php
                  echo $row_product['product_name'];
                  ?></h4>


              <div class="detail">
                <p>
                  <?php
                  echo $row_product['content'];
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <p>
          <?php
          echo $row_product['conclude'];
          ?>
        </p>


        <?php

        function getYoutubeEmbedUrl($url)
        {
          $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
          $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

          if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
          }

          if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
          }
          return 'https://www.youtube.com/embed/' . $youtube_id;
        }

        $url = $row_product['link_video'];
        $embeded_url = getYoutubeEmbedUrl($url);

        // echo $embeded_url;
        ?>


        <div class="ratio ratio-16x9">
          <iframe src="<?php echo $embeded_url ?>" title="YouTube video" allowfullscreen></iframe>
        </div>

        <br>
        <div class="text-center">

          <a href="https://drive.google.com/file/d/11Z9LjlbIttffaj1tRrAvb5ZUcrNAPeZU/view?usp=sharing" class="btn btn-success btn-lg rounded-0 px-5">Download Catalog</a>

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
        $('.spinner').fadeOut(2500);
      },

    });
  </script>

  <script src="js/lazyload.js"></script>

</body>

</html>