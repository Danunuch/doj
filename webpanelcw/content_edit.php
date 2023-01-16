<!DOCTYPE html>
<script src="https://cdn.tiny.cloud/1/2c646ifr40hywrvj32dwwml8e5qmxxr52qvzmjjq7ixbrjby/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/doj_db.php');
error_reporting(0);
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login'>";
}

$content_img = $conn->prepare("SELECT * FROM content_img");
$content_img->execute();
$row_content_img = $content_img->fetchAll();

$content = $conn->prepare("SELECT * FROM content");
$content->execute();
$row_content = $content->fetch(PDO::FETCH_ASSOC);

if (isset($_GET['content_id'])) {
    $content_id = $_GET['content_id'];

    $stmt = $conn->prepare("SELECT * FROM content WHERE content_id = :content_id");
    $stmt->bindParam(":content_id", $content_id);
    $stmt->execute();
    $row_content = $stmt->fetch(PDO::FETCH_ASSOC);

    $img = $conn->prepare("SELECT * FROM content_img WHERE content_id = :content_id");
    $img->bindParam(":content_id", $content_id);
    $img->execute();
    $row_img = $img->fetchAll();
}

if (isset($_POST['edit-content'])) {
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];

    $text = $conn->prepare("UPDATE content SET content1 = :content1, content2 = :content2");
    $text->bindParam(":content1", $content1);
    $text->bindParam(":content2", $content2);
    $text->execute();


   

    foreach ($_FILES['img']['tmp_name'] as $key => $value) {
        $file_names = $_FILES['img']['name'];
        $extension = strtolower(pathinfo($file_names[$key], PATHINFO_EXTENSION));
        $supported = array('jpg', 'jpeg', 'png', 'webp');
        if (in_array($extension, $supported)) {
            $new_name = rand() . '.' . "webp";
            if (move_uploaded_file($_FILES['img']['tmp_name'][$key], "upload/upload_content/" . $new_name)) {
                $sql = "INSERT INTO content_img (img, id) VALUES(:img, :id)";
                $upload_img = $conn->prepare($sql);
                $params = array(
                    'img' => $new_name,
                    'id' => $content_id
                );
                $upload_img->execute($params);
            }
        }
    }
    if ($text) {
        echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'Edit Success',
                            icon: 'success',
                            timer: 5000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=content'>";
    } else {
        echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'Something Went Wrong',
                            icon: 'error',
                            timer: 5000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=content'>";
    }
} if (isset($_POST['del-img'])) {
    $content_id = $_POST['del-img'];

        $delete_img = $conn->prepare("DELETE FROM content_img WHERE id = :id");
        $delete_img->bindParam(":id", $content_id);
        $delete_img->execute();

        if ($delete_img) {
            echo "<meta http-equiv='refresh' content='0;url=content_edit?id=$content_id'>";
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
    <link rel="stylesheet" href="css/product.css?v=<?php echo time(); ?>">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="image/logodoj.png" type="image/png">

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
                <h3>Content Edit</h3>
            </div>
            <section class="section">
                <form method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Content</h4>
                            <button type="submit" name="edit-content" class="btn btn-save">Save</button>
                        </div>
                        <div class="card-body">


                            <div class="content">
                                <div class="content-img">
                                    <div class="group-pos">
                                        <input type="file" name="img[]" id="imgInput" onchange="preview_image();" class="form-control" multiple>
                                        <button type="button" class="btn reset" id="reset2">Reset</button>
                                    </div>
                                    <span class="file-support">Only file are support ('jpg', 'jpeg', 'png', 'webp').</span>
                                    <div id="gallery">
                                        <?php
                                        foreach ($row_content_img as $row_content_img) { ?>
                                            <div class="box-edit-img">
                                                <span class="del-edit-img"><button type="submit" onclick="return confirm('Do you want to delete this image?')" name="del-img" value="<?php echo $row_content_img['id'] ?>" class="btn-edit-del-img"><i class="bi bi-x-lg"></button></i></span>
                                                <img class='previewImg' id='edit-img' src="upload/upload_content/<?php echo $row_content_img['img'] ?>" alt="">
                                            </div>
                                        <?php  }
                                        ?>
                                    </div>
                                </div>
                                <div class="content-text">
                                    <textarea name="content1"><?php echo $row_content['content1'] ?></textarea>
                                    <script>
                                        tinymce.init({
                                            selector: 'textarea',
                                            height: "400",
                                            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                                            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                            tinycomments_mode: 'embedded',
                                            tinycomments_author: 'Author name',
                                            mergetags_list: [{
                                                    value: 'First.Name',
                                                    title: 'First Name'
                                                },
                                                {
                                                    value: 'Email',
                                                    title: 'Email'
                                                },
                                            ]
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div class="conclude">
                            <h6>Content</h6>
                            <textarea name="content2"><?php echo $row_content['content2'] ?></textarea>
                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    height: "300",
                                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    mergetags_list: [{
                                            value: 'First.Name',
                                            title: 'First Name'
                                        },
                                        {
                                            value: 'Email',
                                            title: 'Email'
                                        },
                                    ]
                                });
                            </script>
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
                $('#gallery').append("<div class='box-edit-img'>  <span class='del-edit-img'><button type='submit' onclick='return confirm('Do you want to delete this image?')' name='del-img' class='btn-edit-del-img'><i class='bi bi-x-lg'></i></button></span>  <img class='previewImg' id='edit-img' src='" + URL.createObjectURL(event.target.files[i]) + "'> </div>");
                // $('#gallery').append("");

            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#reset2').click(function() {
                $('#imgInput').val(null);
                $('.previewImg').attr("src", "");
                $('.previewImg').addClass('none');
            });
            $('#reset1').click(function() {
                $('#imgInput-cover').val(null);
                $('#previewImg-cover').attr("src", "");
                // $('.previewImg').addClass('none');
                // $('.box-edit-img').addClass('none');
            });

        });
    </script>

</body>

</html>