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
      <h2>News & Blog</h2>


      <?php include("navigator.php");?>








    </div>
  </section>
  
  <section id="page-section">
      <div class="container-xxl">

       <div class="row-new mobile_col_slick">

                  <?php for($ii=1;$ii<=3;$ii++){ ?>
                  <?php for($i=1;$i<=3;$i++){ ?>
                    <a class="item-new" href="new-detail.php" title="">
                      <div class="box-new  shadow" style='background-image:url(upload/new0<?=$i?>.jpg)'>


                        <div class="text-new">
                          <h4>We constantly supply and deliver the right ...</h4>
                          <p>was established formally with additional focusing on as 
                            sugar industrial ,power plant and renewable energy business. 
                          </p>

                          <span class="btn btn-outline-warning">Read more <span class="material-icons-sharp">add</span></span>
                        </div>

                      </div>
                    </a>
                  <?php } ?>
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