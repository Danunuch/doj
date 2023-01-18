<?php
require_once('webpanelcw/config/doj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
	session_start();
}


$stmt = $conn->prepare("SELECT * FROM content_img");
$stmt->execute();
$row_content_img = $stmt->fetchAll();

$stmt_service = $conn->prepare("SELECT * FROM service_img");
$stmt_service->execute();
$row_service_img = $stmt_service->fetchAll();

$stmt_project = $conn->prepare("SELECT * FROM project_img");
$stmt_project->execute();
$row_project_img = $stmt_project->fetchAll();




if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
	if ($lang == "en") {
		$stmt = $conn->prepare("SELECT * FROM content_en");
		$stmt->execute();
		$row_content = $stmt->fetchAll();
	} else if ($lang == "cn") {
		$stmt = $conn->prepare("SELECT * FROM content_cn");
		$stmt->execute();
		$row_content = $stmt->fetch(PDO::FETCH_ASSOC);
	} else {
		$stmt = $conn->prepare("SELECT * FROM content");
		$stmt->execute();
		$row_content = $stmt->fetch(PDO::FETCH_ASSOC);
	}
} else {
	$stmt = $conn->prepare("SELECT * FROM content");
	$stmt->execute();
	$row_content = $stmt->fetch(PDO::FETCH_ASSOC);
}



if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
	if ($lang == "en") {
		$stmt = $conn->prepare("SELECT * FROM service_en");
		$stmt->execute();
		$row_service = $stmt->fetchAll();
	} else if ($lang == "cn") {
		$stmt = $conn->prepare("SELECT * FROM service_cn");
		$stmt->execute();
		$row_service = $stmt->fetchAll();
	} else {
		$stmt = $conn->prepare("SELECT * FROM service_th");
		$stmt->execute();
		$row_service = $stmt->fetchAll();
	}
} else {
	$stmt = $conn->prepare("SELECT * FROM service_th");
	$stmt->execute();
	$row_service = $stmt->fetchAll();
}


if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
	if ($lang == "en") {
		$stmt = $conn->prepare("SELECT * FROM project_en");
		$stmt->execute();
		$row_project = $stmt->fetchAll();
	} else if ($lang == "cn") {
		$stmt = $conn->prepare("SELECT * FROM project_cn");
		$stmt->execute();
		$row_project = $stmt->fetchAll();
	} else {
		$stmt = $conn->prepare("SELECT * FROM project");
		$stmt->execute();
		$row_project = $stmt->fetchAll();
	}
} else {
	$stmt = $conn->prepare("SELECT * FROM project");
	$stmt->execute();
	$row_project = $stmt->fetchAll();
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


<body>
	<!-- Pre loader -->
	<div class="spinner" id="loading-body">
		<div>
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<?php include("header.php"); ?>
	<?php include("slide.php"); ?>
	<main>
		<section id="intro-section" class="bg-parallax" style="background:url(images/intro-section.jpg) no-repeat top center; background-size:cover;">
			<div class="container-xxl">
				<div class="text-center">
					<p><?php if ($lang == 'en') {
							echo $row_content['content1'];
						} else if ($lang == 'cn') {
							echo $row_content['content1'];
						} else {
							echo $row_content['content1'];
						} ?>
					</p>
				</div>
				<div class="row">
					<?php for ($i = 0; $i <= 2; $i++) { ?>
						<div class="col-lg-4 p-5">
							<div class="item-intro">
								<img class="img-fluid" src="webpanelcw/upload/upload_content/<?php echo $row_content_img[$i]['img']; ?>">
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="text-center">
					<p><?php if ($lang == 'en') {
							echo $row_content['content2'];
						} else if ($lang == 'cn') {
							echo $row_content['content2'];
						} else {
							echo $row_content['content2'];
						} ?>

					</p>
				</div>
			</div>

			<div class="intro-section-bg2 text-center">
				<img src="images/intro-section-bg2.svg">
			</div>

		</section>

		<section id="service-section">
			<div class="container-xxl">
				<div class="text-center page-header">

					<h2 class="mb-5 text-uppercase"><span><?php if ($lang == 'en') {
																echo "OUT";
															} else if ($lang == 'cn') {
																echo "服務";
															} else {
																echo "บริการ";
															} ?></span> <?php if ($lang == 'en') {
																			echo "SERVICES";
																		} else if ($lang == 'cn') {
																			echo "空間不足";
																		} else {
																			echo "นอกสถานที่";
																		} ?></h2>

				</div>






				<div class="row">

					<?php for ($i = 1; $i <= 3; $i++) { ?>
						<div class="col-md-4">
							<a href="service-detail" class="item-service">
								<div class="img-service">
									<img class="img-fluid w-100" src="webpanelcw/upload/upload_service/<?php echo $row_service_img[$i]['image']; ?>">
								</div>
								<div class="text-service">
									<h4><?php if ($lang == 'en') {
											echo $row_service[$i]['service_name'];
										} else if ($lang == 'cn') {
											echo $row_service[$i]['service_name'];
										} else {
											echo $row_service[$i]['service_name'];
										} ?></h4>
									<span class="btn btn-outline-light"><?php if ($lang == 'en') {
																			echo "Read more";
																		} else if ($lang == 'cn') {
																			echo "閱讀更多";
																		} else {
																			echo "อ่านเพิ่มเติม";
																		} ?></span>

								</div>
							</a>
						</div>
					<?php } ?>

				</div>

				<div class="text-center mt-5">
					<a href="service.php" class="btn btn-outline-dark text-uppercase"><?php if ($lang == 'en') {
																							echo "View all";
																						} else if ($lang == 'cn') {
																							echo "查看全部";
																						} else {
																							echo "ดูทั้งหมด";
																						} ?><span class="material-icons-sharp">chevron_right</span></a>
				</div>

			</div>
		</section>


		<section id="portfolio-section">
			<div class="bg-parallax" style="background:url(images/portfolio-section.jpg) no-repeat top center; background-size:cover;">
				<div class="container-xxl">
					<div class="text-center page-header">

						<h2 class="text-white mb-0"><span><?php if ($lang == 'en') {
																echo "PROJECT";
															} else if ($lang == 'cn') {
																echo "表現";
															} else {
																echo "ผลงาน";
															} ?></span> <?php if ($lang == 'en') {
																			echo "REFERENCES";
																		} else if ($lang == 'cn') {
																			echo "過去的";
																		} else {
																			echo "ที่ผ่านมา";
																		} ?></h2>

					</div>

					<div class="fk-h"></div>

				</div>
			</div>





			<div class="box-item">
				<div class="container-xxl">
					<div class="row mobile_col_slick justify-content-center">


						<?php for ($i = 1; $i <= 6; $i++) { ?>
							<div class="col-md-6 col-lg-4 p-md-0">
								<a href="project-detail" class="item-portfolio">
									<div class="img-portfolio">
										<img class="img-fluid w-100" src="webpanelcw/upload/upload_project/<?php echo $row_project_img[$i]['image']; ?>">
									</div>

									<div class="text-portfolio">
										<h4><?php if ($lang == 'en') {
												echo $row_project[$i]['project_name'];
											} else if ($lang == 'cn') {
												echo $row_project[$i]['project_name'];
											} else {
												echo $row_project[$i]['project_name'];
											} ?></h4>
									</div>
								</a>
							</div>
						<?php } ?>

						<div class="col-md-6 col-lg-4 mt-5">
							<a href="project.php" class="btn btn-success btn-lg rounded-0 py-2 px-5 w-100 text-uppercase"><?php if ($lang == 'en') {
																																echo "view all project";
																															} else if ($lang == 'cn') {
																																echo "查看所有作品";
																															} else {
																																echo "ดูผลงานทั้งหมด";
																															} ?></a>
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

							<h2 class="mb-5 text-uppercase"><span><?php if ($lang == 'en') {
																		echo "NEWS &";
																	} else if ($lang == 'cn') {
																		echo "消息 ＆";
																	} else {
																		echo "ข่าวสาร &";
																	} ?></span> <?php if ($lang == 'en') {
																					echo "BLOG";
																				} else if ($lang == 'cn') {
																					echo "博客";
																				} else {
																					echo "บล็อก";
																				} ?></h2>

						</div>
					</div>


					<div class="col-md-6 text-center text-lg-end order-3 order-md-2">
						<a href="new.php" class="btn btn-outline-dark text-uppercase"><?php if ($lang == 'en') {
																							echo "View all";
																						} else if ($lang == 'cn') {
																							echo "查看全部";
																						} else {
																							echo "ดูทั้งหมด";
																						} ?><span class="material-icons-sharp">chevron_right</span></a>
					</div>


					<div class="col-md-12 order-2 order-md-3">
						<div class="row-new mobile_col_slick">

							<?php for ($i = 1; $i <= 3; $i++) { ?>
								<a class="item-new" href="new-detail.php" title="">
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
				</div>
			</div>
		</section>




		<section id="cos-section">
			<div class="container-xxl">
				<div class="page-header">

					<h2 class="mb-5 text-uppercase"><span><?php if ($lang == 'en') {
																		echo "OUR";
																	} else if ($lang == 'cn') {
																		echo "顧客";
																	} else {
																		echo "ลูกค้า";
																	} ?></span> <?php if ($lang == 'en') {
																					echo "CUSTOMER";
																				} else if ($lang == 'cn') {
																					echo "我們的";
																				} else {
																					echo "ของเรา";
																				} ?></span></h2>

				</div>




				<div class="row logo_c_slick">

					<?php for ($ii = 1; $ii <= 2; $ii++) { ?>
						<?php for ($i = 1; $i <= 6; $i++) { ?>
							<div class="col-2">
								<img class="img-fluid" src="upload/cos<?= $i ?>.png">
							</div>
						<?php } ?>
					<?php } ?>

				</div>


			</div>

		</section>

	</main>

	<?php include("footer.php"); ?>


	<script src="js/core.min.js"></script>
	<script src="js/script.min.js"></script>

	<script src="js/jquery.min.js"></script>

	<script type="text/javascript">
		'use strict';
		var $window = $(window);
		$window.on({
			'load': function() {

				/* Preloader */
				$('.spinner').fadeOut(1500);



			},

		});
	</script>

</body>

</html>