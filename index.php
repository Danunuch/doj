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
	<?php include("slide.php");?>
	<main>




		<section id="intro-section" class="bg-parallax" style="background:url(images/intro-section.jpg) no-repeat top center; background-size:cover;">








			<div class="container-xxl">
				<div class="text-center page-header">

					<h2 class="mb-5 text-uppercase"><span>Welcome To</span> DOJ Industrial Co., Ltd.</h2>


				</div>

				<div class="text-center">
					<p>Since 2007, our team with the broad experiences do our best to drive the engineering of materials handling.<br class="d-none d-lg-block">
						We constantly supply and deliver the right products from design, calculation, manufacture, installation throughout<br class="d-none d-lg-block">
						commissioning with market price. In the initial phase, the company built its reputation primarily as conveying system<br class="d-none d-lg-block">
						specialist invidious industries such cement, food manufacturing & processing, chemical, petrochemical,<br class="d-none d-lg-block">
						and new potential in power plant business. Besides, our standard is equal to the world's leading technology<br class="d-none d-lg-block">
						which makes the company grows continuously. 
					</p>
				</div>




				<div class="row">

					<?php for($i=1;$i<=3;$i++){ ?>
						<div class="col-lg-4 p-5">
							<div class="item-intro">
								<img class="img-fluid" src="images/intro0<?=$i?>.jpg">
							</div>
						</div>
					<?php } ?>
				</div>




				<div class="text-center">
					<p>In 2013, <b class="text-primary">DOJ Industrial Co., Ltd.</b> was established formally with additional focusing on as <br class="d-none d-lg-block">
						sugar industrial ,power plant and renewable energy business. 

					</p>
				</div>









			</div>

			<div class="intro-section-bg2 text-center">
				<img  src="images/intro-section-bg2.svg">
			</div>

		</section>












		<section id="service-section">



			<div class="container-xxl">
				<div class="text-center page-header">

					<h2 class="mb-5 text-uppercase"><span>out</span> services</h2>

				</div>


				
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


					<div class="text-center mt-5">
						<a href="service.php" class="btn btn-outline-dark text-uppercase">View all <span class="material-icons-sharp">chevron_right</span></a>
					</div>

				</div>




			</section>










			<section id="portfolio-section">
				<div  class="bg-parallax" style="background:url(images/portfolio-section.jpg) no-repeat top center; background-size:cover;">
					<div class="container-xxl">
						<div class="text-center page-header">

							<h2 class="text-white mb-0"><span>Project</span> References</h2>

						</div>

						<div class="fk-h"></div>

					</div>
				</div>





				<?php $Portfolio = array ( 
					'1'=>"Warehouse and office construction",
					'2'=>"Civil & construction",
					'3'=>"Maintenance and Service Work",
					'4'=>"Sugar belt conveyor",
					'5'=>"Bagasse belt conveyor",
					'6'=>"Piping work");
					?>





					<div class="box-item">
						<div class="container-xxl">
							<div class="row mobile_col_slick justify-content-center">


								<?php for($i=1;$i<=6;$i++){ ?>
									<div class="col-md-6 col-lg-4 p-md-0">
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

								<div class="col-md-6 col-lg-4 mt-5">
									<a href="project.php" class="btn btn-success btn-lg rounded-0 py-2 px-5 w-100 text-uppercase">view all project</a>
								</div>

							</div>


						</div>
					</div>






				</section>


				<section id="new-section">
					<div class="container-xxl">





						<div class="row">
							<div class="col-md-6 order-1 order-md-1">




								<div class="page-header">

									<h2 class="mb-5 text-uppercase"><span>News</span> & Blog</h2>

								</div>



							</div>


							<div class="col-md-6 text-center text-lg-end order-3 order-md-2">
								<a href="new.php" class="btn btn-outline-dark text-uppercase">View all <span class="material-icons-sharp">chevron_right</span></a>
							</div>


							<div class="col-md-12 order-2 order-md-3">
								<div class="row-new mobile_col_slick">

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


								</div>
								<div class="clearfix"></div>
							</div>
						</div>























					</div>




				</section>




				<section id="cos-section">
					<div class="container-xxl">
						<div class="page-header">

							<h2 class="mb-5 text-uppercase"><span>OUR</span> Customer</h2>

						</div>




						<div class="row logo_c_slick">

							<?php for($ii=1;$ii<=2;$ii++){ ?>
								<?php for($i=1;$i<=6;$i++){ ?>
									<div class="col-2">
										<img class="img-fluid" src="upload/cos<?=$i?>.png">
									</div>
								<?php } ?>
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