<!DOCTYPE html>
<script src="https://cdn.tiny.cloud/1/2c646ifr40hywrvj32dwwml8e5qmxxr52qvzmjjq7ixbrjby/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/doj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login'>";
}

if (isset($_POST['add-project'])) {
    $project_name = $_POST['project_name'];
    $customer = $_POST['customer'];
    $location = $_POST['location'];
    $project_start = $_POST['project_start'];
    $project_finish = $_POST['project_finish'];
    $product_list = $_POST['product_list'];
    $status = "on";
    $cover_img = $_FILES['cover_img'];
    $ref_id = $_POST['ref_name'];

    if (empty($project_name)) {
        echo "<script>alert('Please Enter Project Name')</script>";
    } else if (empty($customer)) {
        echo "<script>alert('Please Enter Customer')</script>";
    } else if (empty($location)) {
        echo "<script>alert('Please Enter Location')</script>";
    } else if (empty($project_start)) {
        echo "<script>alert('Please Enter Project Start')</script>";
    } else if (empty($project_finish)) {
        echo "<script>alert('Please Enter Project Finish')</script>";
    } else if (empty($product_list)) {
        echo "<script>alert('Please Enter Product List')</script>";
    } else {
        try {

            $allow = array('jpg', 'jpeg', 'png', 'webp');
            $extention1 = explode(".", $cover_img['name']); //เเยกชื่อกับนามสกุลไฟล์
            $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
            $fileNew1 = rand() . "." . "webp";
            $filePath1 = "upload/upload_project/" . $fileNew1;


            if (in_array($fileActExt1, $allow)) {
                if ($cover_img['size'] > 0 && $cover_img['error'] == 0) {
                    if (move_uploaded_file($cover_img['tmp_name'], $filePath1)) {
                        $project = $conn->prepare("INSERT INTO project_cn (project_name, customer, location, project_start, project_finish, product_list ,status , cover_img, ref_id)
                        VALUES(:project_name, :customer, :location, :project_start, :project_finish, :product_list ,:status , :cover_img , :ref_id )");
                        $project->bindParam(":project_name", $project_name);
                        $project->bindParam(":customer", $customer);
                        $project->bindParam(":location", $location);
                        $project->bindParam(":project_start", $project_start);
                        $project->bindParam(":project_finish", $project_finish);
                        $project->bindParam(":product_list", $product_list);
                        $project->bindParam(":status", $status);
                        $project->bindParam(":cover_img", $fileNew1);
                        $project->bindParam(":ref_id", $ref_id);
                        $project->execute();

                        $id_project = $conn->lastInsertId();
                    }
                }
            } else {
                $project = $conn->prepare("INSERT INTO project_cn (project_name, customer, location, project_start, project_finish, product_list ,status , ref_id)
                VALUES(:project_name, :customer, :location, :project_start, :project_finish, :product_list ,:status , :ref_id )");
                $project->bindParam(":project_name", $project_name);
                $project->bindParam(":customer", $customer);
                $project->bindParam(":location", $location);
                $project->bindParam(":project_start", $project_start);
                $project->bindParam(":project_finish", $project_finish);
                $project->bindParam(":product_list", $product_list);
                $project->bindParam(":status", $status);
                $project->bindParam(":ref_id", $ref_id);
                $project->execute();

                $id_project = $conn->lastInsertId();
            }



            foreach ($_FILES['img']['tmp_name'] as $key => $value) {
                $file_names = $_FILES['img']['name'];

                $extension = strtolower(pathinfo($file_names[$key], PATHINFO_EXTENSION));
                $supported = array('jpg', 'jpeg', 'png', 'webp');
                if (in_array($extension, $supported)) {
                    $new_name = rand() . '.' . "webp";
                    if (move_uploaded_file($_FILES['img']['tmp_name'][$key], "upload/upload_project/" . $new_name)) {
                        $sql = "INSERT INTO project_img (image, project_id) VALUES(:image, :project_id)";
                        $upload_img = $conn->prepare($sql);
                        $params = array(
                            'image' => $new_name,
                            'project_id' => $id_project
                        );
                        $upload_img->execute($params);
                    }
                } else {
                    echo "<script>alert('ไม่รองรับนามสกุลไฟล์นี้')</script>";
                }
            }
            if ($project) {
                echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Add Project has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
                echo "<meta http-equiv='refresh' content='2;url=project_ref_cn'>";
            } else {
                echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Something Went Wrong!!!',
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="stylesheet" href="css/project.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/service.css?v=<?php echo time(); ?>">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="image/logodoj.png" type="image/png">

    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>
<?php

$select_stmt = $conn->prepare("SELECT * FROM category_ref_cn");
$select_stmt->execute();
$query =  $select_stmt->fetchAll();

?>

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
                <h3>Project References Add</h3>
            </div>
            <section class="section">
                <form method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Project References</h4>
                            <button type="submit" name="add-project" class="btn btn-save">Save</button>
                        </div>
                        <div class="card-body">

                            <?php
                            $stmt = $conn->prepare("SELECT* FROM category_ref_cn");
                            $stmt->execute();
                            $category_ref = $stmt->fetchAll();

                            ?>
                            <div class="content">
                                <div class="project-name">
                                    <h6>Project Name</h6>
                                    <input type="text" name="project_name" class="form-control">
                                    <h6>Customer</h6>
                                    <input type="text" name="customer" class="form-control">
                                    <h6>Location</h6>
                                    <input type="text" name="location" class="form-control">
                                    <h6>Project Start</h6>
                                    <input type="text" name="project_start" class="form-control">
                                    <h6>Project Finish</h6>
                                    <input type="text" name="project_finish" class="form-control">
                                    <h6>Product List</h6>
                                    <input type="text" name="product_list" class="form-control">
                                    <h6 for="ref_name" class="col-form-label">Category Project References</h6>
                                    <select class="form-control" name="ref_name" id="">
                                        <option value="" selected disabled>Select</option>
                                        <?php foreach ($query as $value) { ?>
                                            <option value="<?= $value['ref_id'] ?>"><?= $value['ref_name'] ?></option>
                                        <?php } ?>
                                    </select>



                                </div>
                                <div class="content-img">
                                    <span id="upload-img">Content Image</span>
                                    <div class="group-pos">
                                        <input type="file" name="img[]" id="imgInput" onchange="preview_image();" class="form-control" multiple>
                                       
                                    </div>
                                    <span class="file-support">Only file are support ('jpg', 'jpeg', 'png', 'webp').</span>
                                    <div id="gallery"></div>
                                </div>

                            </div>
                            <div class="title-img">
                                <span id="upload-img">Cover Image</span>
                                <div class="group-pos">
                                    <input type="file" name="cover_img" id="imgInput-cover" class="form-control">
                                   
                                </div>
                                <span class="file-support">Only file are support ('jpg', 'jpeg', 'png', 'webp').</span>
                                <div id="gallery-cover">
                                    <div class='box-edit-img-cover'>
                                        <span class='del-edit-img'></span>
                                        <img class='edit-img-cover' id='previewImg-cover' src=''>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </section>
            <?php include('footer.php'); ?>
        </div>
    </div>
    <script language="javascript" src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        function preview_image() {
            var total_file = document.getElementById("imgInput").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#gallery').append("<div class='box-edit-img'>  <span class='del-edit-img'></span>  <img class='previewImg' id='edit-img' src='" + URL.createObjectURL(event.target.files[i]) + "'> </div>");
            }
        }
    </script>

    <script>
        let imgInput = document.getElementById('imgInput-cover');
        let previewImg = document.getElementById('previewImg-cover');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                previewImg.src = URL.createObjectURL(file);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#reset2').click(function() {
                $('#imgInput').val(null);
                $('.previewImg').attr("src", "");
                $('.previewImg').addClass('none');
                $('.box-edit-img').addClass('none');
            });
            $('#imgout').click(function() {
                $('#imgInput').val(null);
            });

        });
    </script>

</body>

</html>