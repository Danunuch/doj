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
      <h2>Project References</h2>


      <?php include("navigator.php");?>








    </div>
  </section>
  <section id="page-section">
    <div class="container-xxl">

     





<div class="row">



<div class="col-md-3 order-2 order-md-1">
 <h2 class="h4 my-4 border-bottom border-warning pb-2 text-primary">Category</h2>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Category Project References
  </a>
   <?php for($i=1;$i<=8;$i++){ ?>
  <a href="#" class="list-group-item list-group-item-action">Category Project References</a>
  <?php } ?>
</div>


</div>




<div class="col-md-9 order-1 order-md-2">

 <h2 class="h4 my-4 border-bottom border-warning pb-2 text-primary">Category Project References</h2>

        <?php $Portfolio = array ( 
          '1'=>"Warehouse and office construction",
          '2'=>"Civil & construction",
          '3'=>"Maintenance and Service Work",
          '4'=>"Sugar belt conveyor",
          '5'=>"Bagasse belt conveyor",
          '6'=>"Piping work");
          ?>


      <div class="row justify-content-center">


        <?php for($i=1;$i<=6;$i++){ ?>

          <div class="col-md-6 col-lg-6 p-md-0">
           <a href="project-detail.php" class="item-portfolio">
            <div class="img-portfolio">
              <img class="img-fluid w-100" src="upload/portfolio0<?=$i?>.jpg">
            </div>

            <div class="text-portfolio">
              <h4><?= $Portfolio[$i] ?></h4>
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