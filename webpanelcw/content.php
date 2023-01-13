<?php
require_once('config/doj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login'>";
}

$stmt = $conn->prepare("SELECT * FROM content");
$stmt->execute();
$row_content = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt_img = $conn->prepare("SELECT * FROM content_img");
$stmt_img->execute();
$row_content_img = $stmt_img->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="css/about_us.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="image/logodoj.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <?php include('sidebar.php'); ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Content</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Content</h4>
                        <div class="box-lang">
                            <a href="content_en"><button type="button" class="btn btn-edit">EN</button></a>
                            <a href="content_cn"><button type="button" class="btn btn-edit">CN</button></a>
                            <a href="content_edit"><button type="button" class="btn btn-edit1">Edit</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $row_content['content1']; ?>
                    </div>
                    <div class="card-body">
                        <?php echo $row_content['content2']; ?>
                    </div>


                    <div class="card-body">
                        <?php
                        for ($i = 0; $i < count($row_content_img); $i++) { ?>
                            <div class="grid">

                                <div class="img-con">
                                    <img src="upload/upload_content/<?php echo $row_content_img[$i]['img']; ?>" alt="">

                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>


            </section>
            <?php include('footer.php'); ?>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>