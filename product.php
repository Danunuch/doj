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
      <h2>Product</h2>


      <?php include("navigator.php");?>








    </div>
  </section>
  
  <section id="page-section">
    <div class="container-xxl">



      <div class="row">



        <div class="col-lg-3 order-2 order-lg-1">





            <?php $Category_name = array ( 
              '1'=>"Category Product02", 
              '2'=>"Category Product02"); ?>


            <h2 class="h4 my-4 border-bottom border-warning pb-2 text-primary">Category</h2>
            <div id='cssmenu'>
              <ul>
                <li class='active has-sub'><a href='#'>Category Product01</a>
                  <ul>

                    <li><a href='#'>Sub Category Product01</a></li>
                    <li><a href='#'>Sub Category Product01</a></li>
                    <li><a href='#'>Sub Category Product01</a></li>
                    <li><a href='#'>Sub Category Product01</a></li>
                    <li><a href='#'>Sub Category Product01</a></li>
                  </ul>

                </li>



                <?php for($i=1;$i<=2;$i++){ ?>
                  <li class='has-sub'><a href='#'><?= $Category_name[$i] ?></a>
                    <ul>

                      <li><a href='#'>Sub <?= $Category_name[$i] ?></a></li>
                      <li><a href='#'>Sub <?= $Category_name[$i] ?></a></li>
                      <li><a href='#'>Sub <?= $Category_name[$i] ?></a></li>
                      <li><a href='#'>Sub <?= $Category_name[$i] ?></a></li>
                      <li><a href='#'>Sub <?= $Category_name[$i] ?></a></li>
                    </ul>

                  </li>

                <?php } ?>
              </ul>
            </div>




        </div>




        <div class="col-lg-9 order-1 order-lg-2">
<h2 class="h4 my-4 border-bottom border-warning pb-2 text-primary">Product list</h2>

          <div class="row">



            <?php for($ii=1;$ii<=3;$ii++){ ?>
              <?php for($i=1;$i<=4;$i++){ ?>
                <div class="col-md-6 col-lg-4">
                  <a href="product-detail.php" class="item-product mb-4">
                    <div class="img-product">
                      <img class="img-fluid w-100" src="upload/cover-product0<?=$i?>.jpg">
                    </div>
                    <div class="text-product">
                      <h3>PIPING  SUPPLY  </h3>

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