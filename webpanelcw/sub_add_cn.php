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

if (isset($_POST['sub_add'])) {
    $sub_name = $_POST['sub_name'];
    $pt_id = $_POST['type_name'];


    if (empty($sub_name)) {
        echo "<script>alert('กรุณากรอกชื่อประเภท')</script>";
    } else if (empty($pt_id)) {
        echo "<script>alert('กรุณากรอกชื่อประเภท')</script>";
    } else {
        $sub_pro = $conn->prepare("INSERT INTO category_sub_cn (sub_name, pt_id)
                                        VALUES(:sub_name, :pt_id)");
        $sub_pro->bindParam(":sub_name", $sub_name);
        $sub_pro->bindParam(":pt_id", $pt_id);
        $sub_pro->execute();
    }

    if ($sub_pro) {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Add Sub Category has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
        echo "<meta http-equiv='refresh' content='2;url=type_product_cn'>";
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
    <!-- <link rel="stylesheet" href="css/product.css?v=<?php echo time(); ?>"> -->
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="image/logodoj.png" type="image/png">
    <link rel="stylesheet" href="css/service.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>
<?php
$select_stmt = $conn->prepare("SELECT * FROM category_product_cn");
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
            <?php
                            $stmt = $conn->prepare("SELECT* FROM category_product_cn");
                            $stmt->execute();
                            $category_product = $stmt->fetchAll();

                            ?>
            <div class="page-heading">
                <h3>Sup Category Add</h3>
            </div>
            <section class="section">
                <form method="post" >
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sup Category</h4>
                            <button type="submit" name="sub_add" class="btn btn-save">Save</button>
                        </div>
                        <div class="card-body">

                            <div class="product-name">
                                <h6>Sup Category Name</h6>
                                <input type="text" name="sub_name" class="form-control">
                                <h6 for="type_name" class="col-form-label">Category Project References</h6>
                                    <select class="form-control" name="type_name" id="">
                                        <option value="" selected disabled>Select</option>
                                        <?php foreach ($query as $value) { ?>
                                            <option value="<?= $value['pt_id'] ?>"><?= $value['type_name'] ?></option>
                                        <?php } ?>
                                    </select>
                            
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>


        <?php include('footer.php'); ?>
    </div>

    <script language="javascript" src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>



</body>

</html>