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
      <h2>About Us</h2>


      <?php include("navigator.php");?>








    </div>
  </section>
  <section id="page-section">
    <div class="container-xxl">
      <p>Since 2007, our team with the broad experiences do our best to drive the engineering of materials handling. We constantly supply and deliver the right products from design, calculation, manufacture, installation throughout commissioning with market price. In the initial phase, the company built its reputation primarily as conveying system specialist invidious industries such cement, food manufacturing & processing, chemical, petrochemical, and new potential in power plant business. Besides, our standard is equal to the world's leading technology which makes the company grows continuously. 
      </p>
      <p>
        In 2013, DOJ Industrial Co., Ltd. was established formally with additional focusing on as sugar industrial ,power plant and renewable energy business. 

      </p>

      <br>
      <div class="text-center">
        <img class="img-fluid" src="images/about.jpg">
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