<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('webpanelcw/config/doj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}

// error_reporting(0);


$secret = "#";


if (isset($_POST['g-recaptcha-response'])) {

  $captcha = $_POST['g-recaptcha-response'];
  $veifyResponse = file_get_contents('https://google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $captcha);
  $responseData = json_decode($veifyResponse);

  if (!$captcha) {

    echo "<script>alert('คุณไม่ได้ป้อน reCAPTCHA อย่างถูกต้อง')</script>";
  }

  if (isset($_POST['submit']) && $responseData->success) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel']; 
    $message = $_POST['message'];
     
  

    if (empty($name)) {
      echo "<script>alert('Please Enter Name')</script>";
    } else if (empty($email)) {
      echo "<script>alert('Please Enter Email')</script>";
    } else if (empty($message)) {
      echo "<script>alert('Please Enter Message')</script>";
    } else if (empty($tel)) {
      echo "<script>alert('Please Enter Tel')</script>";
    } else {
      try {
        $send_message = $conn->prepare("INSERT INTO message(name,email,message,tel) VALUES(:name,:email,:message ,:tel)");
        $send_message->bindParam(":name", $name);
        $send_message->bindParam(":email", $email);
        $send_message->bindParam(":message", $message);  
        $send_message->bindParam(":tel", $tel);
        $send_message->execute();

        if ($send_message) {
          echo "<script>
          $(document).ready(function() {
              Swal.fire({
                  text: 'Send Message Success',
                  icon: 'success',
                  timer: 10000,
                  showConfirmButton: false
              });
          })
          </script>";
          echo "<meta http-equiv='refresh' content='2;url=contact'>";
        } else {
          echo "<script>
          $(document).ready(function() {
              Swal.fire({
                  text: 'Something Went Wrong',
                  icon: 'error',
                  timer: 10000,
                  showConfirmButton: false
              });
          })
          </script>";
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
  }
}



if (isset($_GET['lang'])) {
$lang = $_GET['lang'];
if ($lang == "en") {
$message = $conn->prepare("SELECT * FROM message");
$message->execute();
$row_message = $message->fetch(PDO::FETCH_ASSOC);
} else if ($lang == "cn") {
  $message = $conn->prepare("SELECT * FROM message");
$message->execute();
$row_message = $message->fetch(PDO::FETCH_ASSOC);
} else {
  $message = $conn->prepare("SELECT * FROM message");
  $message->execute();
  $row_message = $message->fetch(PDO::FETCH_ASSOC);
}
} else {
  $message = $conn->prepare("SELECT * FROM message");
  $message->execute();
  $row_message = $message->fetch(PDO::FETCH_ASSOC);
}
?>





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

  

  <script type="text/javascript">
    'use strict';
    var $window = $(window);
    $window.on({
      'load': function() {

        /* Preloader */
        $('.spinner').fadeOut(2500);
      },

    });
  </script>

  
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
      <h2><?php if ($lang == 'en') {
              echo "Contact us";
            } else if ($lang == 'cn') {
              echo "聯繫我們";
            } else {
              echo "ติดต่อเรา";
            } ?></h2>


      <?php include("navigator.php");?>








    </div>
  </section>
  
  <section id="page-section">
      <div class="container-xxl">

        <div class="row justify-content-center">
        


<div class="col-lg-6 text-center">
  <h2 class="text-primary"><?php if ($lang == 'en') {
              echo "Contact us";
            } else if ($lang == 'cn') {
              echo "聯繫我們";
            } else {
              echo "ติดต่อเรา";
            } ?></h2>
  <p><?php if ($lang == 'en') {
              echo "Contact us if you have any questions. About our products and services Fill out the form below. and we will get back to you as soon as possible.";
            } else if ($lang == 'cn') {
              echo "如果您對我們的產品和服務有任何疑問，請聯繫我們。填寫下面的表格。我們會盡快回复您。";
            } else {
              echo "ติดต่อเราหากคุณมีคำถามใด ๆ เกี่ยวกับสินค้าและบริการของเรา กรอกแบบฟอร์มด้านล่าง และเราจะติดต่อกลับโดยเร็วที่สุด";
            } ?></p>
  <div class="row">
   <div class="col-md-6">
    <div class="form-group mb-3">
  
      <input name="contact[name]" type="text" class="form-control" id="inputName" placeholder="Name - Surname">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group mb-3">
    
      <input name="contact[email]" type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group mb-3">
      
      <input name="contact[phone]" type="tel" class="form-control" id="inputEmail" placeholder="Telephone Number">
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group mb-3">
      
      <textarea name="contact[body]" class="form-control" rows="8" placeholder="Message" id="textareaMessage"></textarea>
    </div>

  </div>
  <div class="col-md-12">
    <img src="images/Captcha-demo.gif" width="280" height="76" alt="">
    <div class="clearfix mt-3"></div>

    <a href="" type="submit" name="submit" class="btn btn-warning btn-lg rounded-0 py-2 px-5"><span class="material-icons">send</span> Send Message</a>
    <a href="" class="btn btn-success btn-lg rounded-0 py-2 px-5">Reset</a>
  </div>

</div>

</div>





<div class="col-lg-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.841691893298!2d100.69746092759078!3d13.848539459211057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d635c7a870851%3A0x74de62121487bb7c!2z4Lib4Lix4LiN4LiN4Liy4Lij4Liy4Lih4Lit4Li04LiZ4LiX4Lij4LiyIOC5geC4guC4p-C4hyDguJrguLLguIfguIrguLHguJkg4LmA4LiC4LiV4LiE4Lil4Lit4LiH4Liq4Liy4Lih4Lin4LiyIOC4geC4o-C4uOC4h-C5gOC4l-C4nuC4oeC4q-C4suC4meC4hOC4oyAxMDUxMA!5e0!3m2!1sth!2sth!4v1668680617558!5m2!1sth!2sth" width="600" height="450" ></iframe>
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