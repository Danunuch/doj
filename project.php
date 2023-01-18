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
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}



$stmt = $conn->prepare("SELECT * FROM project_img");
$stmt->execute();
$row_project_img = $stmt->fetchAll();

if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM project_en");
    $stmt->execute();
    $row_project = $stmt->fetchAll();
  } else if ($lang == "cn") {
    $stmt = $conn->prepare("SELECT * FROM project_cn");
    $stmt->execute();
    $row_project = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM project");
    $stmt->execute();
    $row_project = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM project");
  $stmt->execute();
  $row_project = $stmt->fetchAll();
}


$project = $_GET['ref_id'];
if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM category_ref_en");
    $stmt->execute();
    $row_category_ref = $stmt->fetchAll();
  } else if ($lang == "cn") {
    $stmt = $conn->prepare("SELECT * FROM category_ref_cn");
    $stmt->execute();
    $row_category_ref = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM category_ref");
    $stmt->execute();
    $row_category_ref = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM category_ref");
  $stmt->execute();
  $row_category_ref = $stmt->fetchAll();
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
        <h2><?php if ($lang == 'en') {
              echo "Project References";
            } else if ($lang == 'cn') {
              echo "過去的作品";
            } else {
              echo "ผลงานที่ผ่านมา";
            } ?></h2>


        <?php include("navigator.php"); ?>








      </div>
    </section>
    <section id="page-section">
      <div class="container-xxl">







        <div class="row">



          <div class="col-md-3 order-2 order-md-1">
            <h2 class="h4 my-4 border-bottom border-warning pb-2 text-primary"><?php if ($lang == 'en') {
                                                                                  echo "Category";
                                                                                } else if ($lang == 'cn') {
                                                                                  echo "類別";
                                                                                } else {
                                                                                  echo "หมวดหมู่";
                                                                                } ?></h2>

            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                <?php if ($lang == 'en') {
                  echo "Project References";
                } else if ($lang == 'cn') {
                  echo "投資組合類別";
                } else {
                  echo "หมวดหมู่ผลงาน";
                } ?>
              </a>
              <?php for ($i = 0; $i < count($row_category_ref); $i++) { ?>
                <a href="project?project_id=<?php echo $row_category_ref['ref_id']; ?><?php if (isset($_GET['lang'])) {
                                                                                        $lang = $_GET['lang'];
                                                                                        if ($lang == "en") {
                                                                                          echo "&lang=en";
                                                                                        } else if ($lang == "cn") {
                                                                                          echo "&lang=cn";
                                                                                        } else if ($lang == "th") {
                                                                                          echo "&lang=th";
                                                                                        }
                                                                                      } else {
                                                                                        echo "";
                                                                                      }
                                                                                      ?>" class="list-group-item list-group-item-action"><?php if ($lang == 'en') {
                                                                                                                                            echo $row_category_ref[$i]['ref_name'];
                                                                                                                                          } else if ($lang == 'cn') {
                                                                                                                                            echo $row_category_ref[$i]['ref_name'];
                                                                                                                                          } else {
                                                                                                                                            echo $row_category_ref[$i]['ref_name'];
                                                                                                                                          } ?></a>
              <?php } ?>
            </div>


          </div>

          <div class="col-md-9 order-1 order-md-2">

            <h2 class="h4 my-4 border-bottom border-warning pb-2 text-primary"><?php if ($lang == 'en') {
                                                                                  echo "Category Project References";
                                                                                } else if ($lang == 'cn') {
                                                                                  echo "類別項目參考";
                                                                                } else {
                                                                                  echo "หมวดหมู่ผลงานที่ผ่านมา";
                                                                                } ?></h2>




            <div class="row justify-content-center">


              <?php for ($i = 1; $i <= 6; $i++) { ?>

                <div class="col-md-6 col-lg-6 p-md-0">
                  <a href="project-detail.php" class="item-portfolio">
                    <div class="img-portfolio">
                      <img class="img-fluid w-100" src="webpanelcw/upload/upload_project/<?php echo $row_project_img[$i]['image']; ?>">
                    </div>

                    <div class="text-portfolio">
                      <h4><?php if ($lang == 'en') {
                            echo $row_project[$i]['project_name'];
                          } else if ($lang == 'cn') {
                            echo $row_project[$i]['project_name'];
                          } else {
                            echo $row_project[$i]['project_name'];
                          } ?></h4>
                    </div>
                  </a>
                </div>
              <?php } ?>


            </div>

          </div>
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