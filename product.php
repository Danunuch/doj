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



$stmt = $conn->prepare("SELECT * FROM product_img");
$stmt->execute();
$row_product_img = $stmt->fetchAll();

if (isset($_GET['lang']) && $_GET['pt_id']) {
  $lang = $_GET['lang'];
  $pt_id = $_GET['pt_id'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM product_en WHERE pt_id = :pt_id");
    $stmt->bindParam(":pt_id", $pt_id);
    $stmt->execute();
    $row_product = $stmt->fetchAll();
  } else if ($lang == "cn") {
    $stmt = $conn->prepare("SELECT * FROM product_cn WHERE pt_id = :pt_id");
    $stmt->bindParam(":pt_id", $pt_id);
    $stmt->execute();
    $row_product = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM product WHERE pt_id = :pt_id");
    $stmt->bindParam(":pt_id", $pt_id);
    $stmt->execute();
    $row_product = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM product WHERE pt_id = :pt_id");
  $stmt->bindParam(":pt_id", $pt_id);
  $stmt->execute();
  $row_product = $stmt->fetchAll();
}


$product = $_GET['pt_id'];
if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM category_product_en");
    $stmt->execute();
    $row_category_ref = $stmt->fetchAll();
  } else if ($lang == "cn") {
    $stmt = $conn->prepare("SELECT * FROM category_product_cn");
    $stmt->execute();
    $row_category_ref = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM category_product");
    $stmt->execute();
    $row_category_product = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM category_product");
  $stmt->execute();
  $row_category_product = $stmt->fetchAll();
}



// $product = $_GET['pt_id'];
if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM category_sub_en WHERE pt_id = :pt_id");
    $stmt->bindParam(":pt_id", $pt_id);
    $stmt->execute();
    $row_category_sub = $stmt->fetchAll();
  } else if ($lang == "cn") {
    $stmt = $conn->prepare("SELECT * FROM category_sub_cn WHERE pt_id = :pt_id");
    $stmt->bindParam(":pt_id", $pt_id);
    $stmt->execute();
    $row_category_sub = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM category_sub WHERE pt_id = :pt_id");
    $stmt->bindParam(":pt_id", $pt_id);
    $stmt->execute();
    $row_category_sub = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM category_sub WHERE pt_id = :pt_id");
  $stmt->bindParam(":pt_id", $pt_id);
  $stmt->execute();
  $row_category_sub = $stmt->fetchAll();
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
              echo "Product";
            } else if ($lang == 'cn') {
              echo "產品";
            } else {
              echo "ผลิตภัณฑ์";
            } ?></h2>


        <?php include("navigator.php"); ?>








      </div>
    </section>

    <section id="page-section">
      <div class="container-xxl">



        <div class="row">



          <div class="col-lg-3 order-2 order-lg-1">



            <h2 class="h4 my-4 border-bottom border-warning pb-2 text-primary"><?php if ($lang == 'en') {
                                                                                  echo "Category";
                                                                                } else if ($lang == 'cn') {
                                                                                  echo "類別";
                                                                                } else {
                                                                                  echo "หมวดหมู่";
                                                                                } ?></h2>
            <div id='cssmenu'>
              <ul>
                <?php for ($i = 0; $i < count($row_category_product); $i++) {
                  
                  if (isset($_GET['lang'])) {
                    $lang = $_GET['lang'];
                    if ($lang == "en") {
                  $a = $conn->prepare("SELECT * FROM category_sub_en WHERE pt_id = :id");
                  $a->bindParam(":id", $row_category_product[$i]['pt_id']);
                  $a->execute();
                  $row_a = $a->fetchAll();
                } else if ($lang == "cn") {
                  $a = $conn->prepare("SELECT * FROM category_sub_cn WHERE pt_id = :id");
                  $a->bindParam(":id", $row_category_product[$i]['pt_id']);
                  $a->execute();
                  $row_a = $a->fetchAll();
                } else {
                  $a = $conn->prepare("SELECT * FROM category_sub WHERE pt_id = :id");
                  $a->bindParam(":id", $row_category_product[$i]['pt_id']);
                  $a->execute();
                  $row_a = $a->fetchAll();
                }
              } else {
                $a = $conn->prepare("SELECT * FROM category_sub WHERE pt_id = :id");
                $a->bindParam(":id", $row_category_product[$i]['pt_id']);
                $a->execute();
                $row_a = $a->fetchAll();
              }
            
                ?>
                  <li class='active has-sub'><a href='#'><?php if ($lang == 'en') {
                                                            echo $row_category_product[$i]['type_name'];
                                                          } else if ($lang == 'cn') {
                                                            echo $row_category_product[$i]['type_name'];
                                                          } else {
                                                            echo $row_category_product[$i]['type_name'];
                                                          } ?></a>

                    <ul>
                      <?php
                      for ($j = 0; $j < count($row_a); $j++) { ?>
                        <li><a href='#'><?php if ($lang == 'en') {
                                          echo $row_a[$j]['sub_name'];;
                                        } else if ($lang == 'cn') {
                                          echo $row_a[$j]['sub_name'];;
                                        } else {
                                          echo $row_a[$j]['sub_name'];;
                                        } ?>
                          </a></li>
                      <?php   }
                      ?>




                    </ul>

                  </li>


                <?php } ?>

              </ul>
            </div>




          </div>




          <div class="col-lg-9 order-1 order-lg-2">
            <h2 class="h4 my-4 border-bottom border-warning pb-2 text-primary"><?php if ($lang == 'en') {
                                                                                  echo "Product list";
                                                                                } else if ($lang == 'cn') {
                                                                                  echo "產品列表";
                                                                                } else {
                                                                                  echo "รายการสินค้า";
                                                                                } ?></h2>

            <div class="row">


              <?php for ($i = 0; $i < count($row_product); $i++) { ?>
                <div class="col-md-6 col-lg-4">
                  <a href="product-detail?product_id=<?php echo $row_product[$i]['product_id']; ?><?php if (isset($_GET['lang'])) {
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
                                                                                                  ?>" class="item-product mb-4">
                    <div class="img-product">
                      <img class="img-fluid w-100" src="webpanelcw/upload/upload_product/<?php echo $row_product[$i]['cover_img']; ?>">
                    </div>
                    <div class="text-product">
                      <h3><?php if ($lang == 'en') {
                            echo $row_product[$i]['product_name'];
                          } else if ($lang == 'cn') {
                            echo $row_product[$i]['product_name'];
                          } else {
                            echo $row_product[$i]['product_name'];
                          } ?></h3>

                      <div class="btn-product">
                        <div class="btn-down">
                          <span class="material-icons-sharp">
                            expand_more
                          </span>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
              <?php } ?>









              <div class="col-12">
                <ul class="pagination justify-content-center mt-5">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">«</span> Previous
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">»</span> Next
                    </a>
                  </li>
                </ul>
              </div>



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