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

        <div class="col-md-6 ">


          <h3 class="mb-4 text-uppercase text-primary">Bagasse belt conveyor</h3>




          <table class="table table-bordered">

            <tbody>


              <tr>
                <td class="text-white bg-success"><b>Project name:</b></td>

                <td>Bagasses Belt Conveyor</td>

              </tr>


              <tr>
                <td class="text-white bg-success"><b>Customer:</b></td>

                <td>KTIS</td>

              </tr>


              <tr>
                <td class="text-white bg-success"><b>Location:</b></td>

                <td>Nakhon Sawan, Thailand</td>

              </tr>


              <tr>
                <td class="text-white bg-success"><b>Project Start:</b></td>

                <td>July 2021</td>

              </tr>


              <tr>
                <td class="text-white bg-success"><b>Project Finish:</b></td>
                <td>December 2021</td>

              </tr>

              <tr>
                <td class="text-white bg-success"><b>Product list:</b></td>

                <td>Bagasse Belt Conveyor</td>

              </tr>


            </tbody>
          </table>


        </div>
  




        <div class="col-md-6  ">



          <img id="show-product" class="img-responsive mb-4" src="upload/g01.jpg" width="100%">




          <div class="row product_detail">
           <?php for($i=1;$i<=5;$i++){ ?>
            <div class="col-12">
              <a href="javascript:void(0)" id="list" data-test="upload/g0<?=$i?>.jpg"><img class="img-responsive" data-image="original" src="upload/g0<?=$i?>.jpg" alt="Cannabis"></a>
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