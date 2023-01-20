<?php
require_once('webpanelcw/config/doj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}





if (isset($_GET['service_id'])) {
  $service = $_GET['service_id'];

  $stmt_img = $conn->prepare("SELECT * FROM service_img WHERE service_id = :img_id");
  $stmt_img->bindParam(":img_id", $service);
  $stmt_img->execute();
  $row_service_img = $stmt_img->fetchAll();

  if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ($lang == "en") {
      $stmt = $conn->prepare("SELECT * FROM service_en WHERE service_id = :service_id");
      $stmt->bindParam(":service_id", $service);
      $stmt->execute();
      $row_service = $stmt->fetch(PDO::FETCH_ASSOC);
    } else if ($lang == "cn") {
      $stmt = $conn->prepare("SELECT * FROM service_cn WHERE service_id = :service_id");
      $stmt->bindParam(":service_id", $service);
      $stmt->execute();
      $row_service = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      $stmt = $conn->prepare("SELECT * FROM service_th WHERE service_id = :service_id");
      $stmt->bindParam(":service_id", $service);
      $stmt->execute();
      $row_service = $stmt->fetch(PDO::FETCH_ASSOC);
    }
  } else {
    $service = $_GET['service_id'];
    $stmt = $conn->prepare("SELECT * FROM service_th WHERE service_id = :service_id");
    $stmt->bindParam(":service_id", $service);
    $stmt->execute();
    $row_service = $stmt->fetch(PDO::FETCH_ASSOC);
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
          echo "Services";
          } else if ($lang == "cn") {
           echo "服務";
           } else if ($lang == "th") {
           echo "บริการ";
            }
          
         } ?></h2>


        <?php include("navigator.php"); ?>

      </div>
    </section>
    <section id="page-section">
      <div class="container-xxl">


        <h4 class="text-primary">

          <?php if ($lang == 'en') {
            echo $row_service['service_name'];
          } else if ($lang == 'cn') {
            echo $row_service['service_name'];
          } else {
            echo $row_service['service_name'];
          } ?>

        </h4>

        <p>

          <?php if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
            if ($lang == "en") {
              echo $row_service['content'];
            } else if ($lang == "cn") {
              echo $row_service['content'];
            } else if ($lang == "th") {
              echo $row_service['content'];
            }
          } else {
            echo $row_service['content'];
          }
          ?>
        </p>

        <div class="row  zoomimg">

          <?php for ($i = 0; $i < count($row_service_img); $i++) { ?>

            <div class="col-md-4 col-sm-6">
              <div class="view-seventh1">
                <a href="webpanelcw/upload/upload_service/<?php echo $row_service_img[$i]['image']; ?>" class="b-link-stripe b-animate-go thickbox" title="ระบบไฟฟ้าและสื่อสาร">

                  <div class="box-zoom">
                    <div class="box-zoom-img">
                      <img class="img-fluid" src="webpanelcw/upload/upload_service/<?php echo $row_service_img[$i]['image']; ?>" alt="ระบบไฟฟ้าและสื่อสาร">

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