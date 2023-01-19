<!DOCTYPE html>
<html lang="en" class="desktop">
<head>
<!-- 
  <link rel="shortcut icon" href="images/favicon.ico"> -->
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



if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM news_en");
    $stmt->execute();
    $row_news = $stmt->fetchAll();
  } else if ($lang == "cn") {
    $stmt = $conn->prepare("SELECT * FROM news_cn");
    $stmt->execute();
    $row_news = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM news");
    $stmt->execute();
    $row_news = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM news");
  $stmt->execute();
  $row_news = $stmt->fetchAll();
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
      <h2><?php if ($lang == 'en') {
              echo "News & Blog";
            } else if ($lang == 'cn') {
              echo "新聞與博客";
            } else {
              echo "ข่าวสาร & บล็อก";
            } ?></h2>


      <?php include("navigator.php");?>








    </div>
  </section>
  
  <section id="page-section">
      <div class="container-xxl">

       <div class="row-new mobile_col_slick">

                  <?php for($i=0;$i<count($row_news);$i++){ ?>
                    <a class="item-new" href="new-detail?news_id=<?php echo $row_news[$i]['news_id']; ?><?php if (isset($_GET['lang'])) {
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
                                                                                        ?>" title="">
                      <div class="box-new  shadow" style='background-image:url(webpanelcw/upload/upload_news/<?php echo $row_news[$i]['cover_img']; ?>'>


                        <div class="text-new">
                          <h4><?php if ($lang == 'en') {
                        echo $row_news[$i]['news_name'];
                      } else if ($lang == 'cn') {
                        echo $row_news[$i]['news_name'];
                      } else {
                        echo $row_news[$i]['news_name'];
                      } ?>...</h4>
                          <p><?php if ($lang == 'en') {
                        echo $row_news[$i]['content'];
                      } else if ($lang == 'cn') {
                        echo $row_news[$i]['content'];
                      } else {
                        echo $row_news[$i]['content'];
                      } ?> 
                          </p>

                          <span class="btn btn-outline-warning"><?php if ($lang == 'en') {
                                                        echo "Read more";
                                                      } else if ($lang == 'cn') {
                                                        echo "閱讀更多";
                                                      } else {
                                                        echo "อ่านเพิ่มเติม";
                                                      } ?><span class="material-icons-sharp">add</span></span>
                        </div>

                      </div>
                    </a>
             
                  <?php } ?>


                </div>
                <div class="clearfix"></div>

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