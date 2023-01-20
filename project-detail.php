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




if (isset($_GET['project_id'])) {
  $project = $_GET['project_id'];

  $stmt_img = $conn->prepare("SELECT * FROM project_img WHERE project_id = :img_id");
  $stmt_img->bindParam(":img_id", $project);
  $stmt_img->execute();
  $row_project_img = $stmt_img->fetchAll();

  if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ($lang == "en") {
      $stmt = $conn->prepare("SELECT * FROM project_en WHERE project_id = :project_id");
      $stmt->bindParam(":project_id", $project);
      $stmt->execute();
      $row_project = $stmt->fetch(PDO::FETCH_ASSOC);
    } else if ($lang == "cn") {
      $stmt = $conn->prepare("SELECT * FROM project_cn WHERE project_id = :project_id");
      $stmt->bindParam(":project_id", $project);
      $stmt->execute();
      $row_project = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      $stmt = $conn->prepare("SELECT * FROM project WHERE project_id = :project_id");
      $stmt->bindParam(":project_id", $project);
      $stmt->execute();
      $row_project = $stmt->fetch(PDO::FETCH_ASSOC);
    }
  } else {
    $project = $_GET['project_id'];
    $stmt = $conn->prepare("SELECT * FROM project WHERE project_id = :project_id");
    $stmt->bindParam(":project_id", $project);
    $stmt->execute();
    $row_project = $stmt->fetch(PDO::FETCH_ASSOC);
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


<?php include("header.php");?>

<main>

  <section id="section-texthaed" class="bg-parallax" style="background:url(upload/section-texthaed.jpg) no-repeat top center;background-size:cover"> 
    <div class="container-xxl">
      <h2><?php if (isset($_GET['lang'])) {
         $lang = $_GET['lang'];
          if ($lang == "en") {
          echo "Project References";
          } else if ($lang == "cn") {
           echo "表現";
           } else if ($lang == "th") {
           echo "ผลงาน";
            }
          
         } ?></h2>


      <?php include("navigator.php");?>








    </div>
  </section>
  
  <section id="page-section">
    <div class="container-xxl">







      <div class="row">

        <div class="col-md-6 ">


          <h3 class="mb-4 text-uppercase text-primary">
            <?php if ($lang == 'en') {
            echo $row_project['project_name'];
          } else if ($lang == 'cn') {
            echo $row_project['project_name'];
          } else {
            echo $row_project['project_name'];
          } ?></h3>




          <table class="table table-bordered">

            <tbody>


              <tr>
                <td class="text-white bg-success"><b>
                  <?php if (isset($_GET['lang'])) {
         $lang = $_GET['lang'];
          if ($lang == "en") {
          echo "Project name:";
          } else if ($lang == "cn") {
           echo "作品名稱:";
           } else if ($lang == "th") {
           echo "ชื่อผลงาน:";
            }
          } else {
            echo "ชื่อผลงาน:";
          
         } ?></b></td>

                <td><?php if ($lang == 'en') {
            echo $row_project['project_name'];
          } else if ($lang == 'cn') {
            echo $row_project['project_name'];
          } else {
            echo $row_project['project_name'];
            
          } ?></td>

              </tr>


              <tr>
                <td class="text-white bg-success"><b><?php if (isset($_GET['lang'])) {
         $lang = $_GET['lang'];
          if ($lang == "en") {
          echo "Customer:";
          } else if ($lang == "cn") {
           echo "顧客:";
           } else if ($lang == "th") {
           echo "ลูกค้า:";
            }
          } else {
            echo "ลูกค้า:";
         } ?></b></td>

                <td><?php if ($lang == 'en') {
            echo $row_project['customer'];
          } else if ($lang == 'cn') {
            echo $row_project['customer'];
          } else {
            echo $row_project['customer'];
          } ?></td>

              </tr>


              <tr>
                <td class="text-white bg-success"><b><?php if (isset($_GET['lang'])) {
         $lang = $_GET['lang'];
          if ($lang == "en") {
          echo "Location:";
          } else if ($lang == "cn") {
           echo "地點:";
           } else if ($lang == "th") {
           echo "ที่ตั้ง:";
            }
          } else {
            echo "ที่ตั้ง:";
         } ?></b></td>

                <td><?php if ($lang == 'en') {
            echo $row_project['location'];
          } else if ($lang == 'cn') {
            echo $row_project['location'];
          } else {
            echo $row_project['location'];
          } ?></td>

              </tr>


              <tr>
                <td class="text-white bg-success"><b><?php if (isset($_GET['lang'])) {
         $lang = $_GET['lang'];
          if ($lang == "en") {
          echo "Project Start:";
          } else if ($lang == "cn") {
           echo "項目開始:";
           } else if ($lang == "th") {
           echo "เริ่มต้น:";
            }
          } else {
            echo "เริ่มต้น:";
         } ?></b></td>

                <td><?php if ($lang == 'en') {
            echo $row_project['project_start'];
          } else if ($lang == 'cn') {
            echo $row_project['project_start'];
          } else {
            echo $row_project['project_start'];
          } ?></td>

              </tr>


              <tr>
                <td class="text-white bg-success"><b><?php if (isset($_GET['lang'])) {
         $lang = $_GET['lang'];
          if ($lang == "en") {
          echo "Project Finish:";
          } else if ($lang == "cn") {
           echo "項目完成:";
           } else if ($lang == "th") {
           echo "เสร็จสิ้น:";
            }
          } else {
            echo "เสร็จสิ้น:";
          
         } ?></b></td>
                <td><?php if ($lang == 'en') {
            echo $row_project['project_finish'];
          } else if ($lang == 'cn') {
            echo $row_project['project_finish'];
          } else {
            echo $row_project['project_finish'];
          } ?></td>

              </tr>

              <tr>
                <td class="text-white bg-success"><b><?php if (isset($_GET['lang'])) {
         $lang = $_GET['lang'];
          if ($lang == "en") {
          echo "Product list:";
          } else if ($lang == "cn") {
           echo "產品列表：";
           } else if ($lang == "th") {
           echo "รายการสินค้า:";
            }
          } else {
            echo "รายการสินค้า:";
         } ?></b></td>

                <td><?php if ($lang == 'en') {
            echo $row_project['product_list'];
          } else if ($lang == 'cn') {
            echo $row_project['product_list'];
          } else {
            echo $row_project['product_list'];
          } ?></td>

              </tr>


            </tbody>
          </table>


        </div>
  




        <div class="col-md-6  ">

        <img id="show-product" class="img-responsive mb-4" src="webpanelcw/upload/upload_project/<?php echo $row_project_img[0]['image'];?>" width="100%">
          <div class="row product_detail">
           <?php for($i=1;$i<count($row_project_img);$i++){ ?>
            <div class="col-12">
              <a href="javascript:void(0)" id="list" data-test="webpanelcw/upload/upload_project/<?php echo $row_project_img[$i]['image'];?>"><img class="img-responsive" image="original" src="webpanelcw/upload/upload_project/<?php echo $row_project_img[$i]['image'];?>" alt="Cannabis"></a>
            </div>
          <?php } ?>       

        </div>





      </div>


    </div>





  </div>
</section>


</main>

<?php include("footer.php");?>


<script src="js/core.min.js"></script>
  <script src="js/script.min.js"></script>

  <script src="js/jquery.min.js"></script>

  <script type="text/javascript">

    'use strict'; 
    var $window = $(window); 
    $window.on({
      'load': function () {

        /* Preloader */ 
        $('.spinner').fadeOut(1500);
        
        
        
        
      },
      
    });

  </script>

</body>
</html>