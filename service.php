<!DOCTYPE html>
<html lang="en" class="desktop">
<head>

  <link rel="shortcut icon" href="images/favicon.ico">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=0.85">
  <meta name="description" content="DOJ INDUSTRIAL (ดอจ อุตสาหการ)">
  <meta name="keyword" content="DOJ INDUSTRIAL (ดอจ อุตสาหการ)">
  <meta name="author" content="DOJ INDUSTRIAL (ดอจ อุตสาหการ)">

  <title>DOJ INDUSTRIAL (ดอจ อุตสาหการ)</title>


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


<?php include("header.php");?>

<main>
  <section id="section-texthaed" class="bg-parallax" style="background:url(upload/section-texthaed.jpg) no-repeat top center;background-size:cover"> 
    <div class="container-xxl">
      <h2>Services</h2>


      <?php include("navigator.php");?>








    </div>
  </section>
  <section id="page-section">
    <div class="container-xxl">

     

        <?php $Service = array ( 
          '1'=>"Material and Equipment Work",
          '2'=>"Engineering, Fabrication ,Installation and Commissioning Work",
          '3'=>"Maintenance and Service Work");
          ?>





          <div class="row">

            <?php for($i=1;$i<=3;$i++){ ?>
              <div class="col-md-4">
                <a href="service-detail.php" class="item-service">
                  <div class="img-service">
                    <img class="img-fluid w-100" src="upload/service<?=$i?>.jpg">
                  </div>
                  <div class="text-service">
                    <h4><?= $Service[$i] ?></h4>
                    <span class="btn btn-outline-light">Read more</span>

                  </div>
                </a>
              </div>
            <?php } ?>

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