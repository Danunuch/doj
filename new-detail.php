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
      <h2>News & Blog</h2>


      <?php include("navigator.php");?>








    </div>
  </section>
  
  <section id="page-section">
      <div class="container-xxl">

  
<h4 class="text-primary">We constantly supply and deliver the right</h4>
        



<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat erat placerat mi lacinia viverra. Morbi blandit ex sed leo eleifend lobortis. Quisque interdum ornare felis nec ullamcorper. Phasellus id sollicitudin ipsum, laoreet euismod massa. Duis fringilla a mi vel feugiat. Nulla et pharetra augue. Nam sit amet nunc tincidunt, consequat magna eu, luctus felis. Integer semper felis felis, ut consectetur magna dapibus sed. Praesent posuere massa quis fringilla cursus. Integer a neque sit amet risus suscipit fermentum quis lacinia mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in diam purus. Maecenas diam augue, blandit vitae nisl eget, congue dignissim magna. Quisque leo urna, tincidunt vitae malesuada sed, imperdiet ut ligula. Mauris congue, orci ut gravida dignissim, lacus tortor molestie turpis, nec finibus est velit nec sapien.
</p>

<p>
Phasellus at lacus quam. Aenean in tellus at libero consequat cursus ut at libero. Morbi mollis ultricies tincidunt. Aliquam erat volutpat. Phasellus euismod mauris et orci gravida, at condimentum massa congue. Etiam cursus volutpat arcu nec maximus. Vestibulum consectetur semper massa, tempor volutpat est fermentum vitae. Cras finibus nec augue ut eleifend. Proin posuere massa sit amet sapien venenatis, at congue dui gravida. Fusce diam ex, placerat sed eros et, lacinia venenatis felis. Aliquam a imperdiet dui. Maecenas odio enim, congue in sem in, ultricies vulputate mi. Nullam ullamcorper lectus vel aliquam faucibus. Pellentesque et eros molestie, mattis nibh et, maximus est. Proin auctor blandit magna et efficitur. Quisque a neque nulla.
</p>

<p>
Donec venenatis consequat mi, vitae vulputate tortor tristique at. Mauris pretium et neque sit amet rutrum. Aliquam ullamcorper ligula eu lorem accumsan convallis non sit amet nisl. Donec vehicula quam tellus, quis eleifend massa malesuada eu. Nunc ultricies molestie convallis. Fusce ornare nunc aliquet erat maximus malesuada. Praesent eget quam vitae tortor fringilla ultricies in sed ante. Fusce ut ultricies ante. Suspendisse quam orci, euismod vel mollis aliquam, pellentesque eget velit. Cras bibendum fermentum neque ac imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum, mi et interdum viverra, diam risus semper velit, et sagittis purus sem a erat. Quisque non tortor lobortis, convallis odio a, consequat felis. Duis ac egestas orci. Suspendisse imperdiet diam non lobortis iaculis. Pellentesque viverra quam diam, tempus venenatis magna fermentum sed.
</p>

<p>
Quisque mauris nisl, consectetur eu est in, ultricies suscipit lectus. Aenean ligula elit, eleifend eu lorem ut, aliquam ultricies eros. Sed urna magna, bibendum a commodo vitae, finibus at nisi. Aenean finibus massa at sollicitudin vehicula. Sed et consequat elit. Nullam non felis et lectus mattis blandit aliquam tempor neque. Nulla ac nulla ornare, tristique nibh at, imperdiet libero. Maecenas dictum mauris nec elit condimentum, eu lacinia sem ultricies. Morbi rutrum magna quis mattis dapibus.
</p>


<p>
Pellentesque sodales scelerisque odio, a consectetur nisi aliquam porta. Praesent vel ligula vel quam ullamcorper gravida eget sed lectus. Aliquam vel tempor diam, eu ultrices nunc. Vivamus id purus risus. Nam rhoncus metus sed urna auctor, ac venenatis ante elementum. Suspendisse convallis lorem quis condimentum porta. Cras malesuada fringilla eleifend. Nam vitae urna est. Aliquam erat volutpat.
</p>

<div class="row  zoomimg">

        <?php for($i=4;$i<=6;$i++){ ?>
         
          <div class="col-md-4 col-sm-6">
            <div class="view-seventh1">
              <a href="upload/g0<?=$i?>.jpg" class="b-link-stripe b-animate-go thickbox" title="ระบบไฟฟ้าและสื่อสาร">

                <div class="box-zoom">
                  <div class="box-zoom-img">
                    <img class="img-fluid" src="upload/g0<?=$i?>.jpg" alt="ระบบไฟฟ้าและสื่อสาร">

                    <div class="zoom-zoom">
                      <span class="material-icons-outlined">
                        add
                      </span>
                    </div>

                  </div>

                  <div class="clearfix"></div>

                </div>


              </a>    
            </div>
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