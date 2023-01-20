<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/doj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login'>";
}

$data_typepro = $conn->prepare("SELECT * FROM category_product_en");
$data_typepro->execute();
$row_type_product = $data_typepro->fetchAll();

$data_sub = $conn->prepare("SELECT * FROM category_sub_en");
$data_sub->execute();
$row_sub_product = $data_sub->fetchAll();

if (isset($_POST['edit-type-pro'])) {
    $pt_id = $_POST['pt_id'];
    $type_name = $_POST['type_name'];

    $edit_product_ref = $conn->prepare("UPDATE category_product_en SET type_name = :type_name WHERE pt_id = :pt_id");
    $edit_product_ref->bindParam(":type_name", $type_name);
    $edit_product_ref->bindParam(":pt_id", $pt_id);
    $edit_product_ref->execute();

    if ($edit_product_ref) {
        echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'Edit Type has been completed.',
                            icon: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
        echo "<meta http-equiv='refresh' content='2;url=type_product_en'>";
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

if (isset($_POST['edit-sub'])) {
    $id = $_POST['id'];
    $sub_name = $_POST['sub_name'];

    $edit_sub = $conn->prepare("UPDATE category_sub_en SET sub_name = :sub_name WHERE id = :id");
    $edit_sub->bindParam(":sub_name", $sub_name);
    $edit_sub->bindParam(":id", $id);
    $edit_sub->execute();

    if ($edit_sub) {
        echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'Edit Type has been completed.',
                            icon: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
        echo "<meta http-equiv='refresh' content='2;url=type_product_en'>";
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


//delete cat main
if (isset($_POST['delete_ref'])) {
    $cat_id = $_POST['delete_ref'];

    $q_sub = $conn->prepare("SELECT * FROM category_sub_en WHERE pt_id = :id");
    $q_sub->bindParam(":id", $cat_id);
    $q_sub->execute();
    $row_sub_cat = $q_sub->fetchAll();

    //delete main
    $del_cat_main = $conn->prepare("DELETE FROM category_product_en WHERE pt_id = :id");
    $del_cat_main->bindParam(":id", $cat_id);
    $del_cat_main->execute();

    //delete sub
    for ($i = 0; $i < count($row_sub_cat); $i++) {
        $del_in_sub = $conn->prepare("DELETE FROM category_sub_en WHERE pt_id = :pt_id");
        $del_in_sub->bindParam(":pt_id", $row_sub_cat[$i]['pt_id']);
        $del_in_sub->execute();
    }

    if ($del_in_sub) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Delete Type has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='2;url=type_product_en'>";
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

// delete sub
if (isset($_POST['delete_sub'])) {
    $sub_id = $_POST['delete_sub'];
    $del_sub = $conn->prepare("DELETE FROM category_sub_en WHERE id = :id");
    $del_sub->bindParam(":id", $sub_id);
    $del_sub->execute();

    if ($del_sub) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Delete Type has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='2;url=type_product_en'>";
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
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="image/logodoj.png" type="image/png">
    <link rel="stylesheet" href="css/contact.css?v=<?php echo time(); ?>">
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
                <h3>Type Product</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Type Product</h4>
                        <div class="flex-end">
                            <a href="type_product"><button type="button" class="btn btn-edit1">TH</button></a>
                            <a href="type_product_cn"><button type="button" class="btn btn-edit1">CN</button></a>
                            <a href="type_add_en"><button type="button" class="btn btn-edit1">Add</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th width="40%">Type Name</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($row_type_product as $row_type_product) { ?>
                                        <tr>
                                        
                                            <td align="center"><?php echo $row_type_product['type_name']; ?></td>
                                            <td align="center">
                                                <form method="post">
                                                <a type="input" class="btn btn-warning" style="color: #FFFFFF;" data-bs-toggle="modal" href="#edit-info<?php echo $row_type_product['pt_id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                                <button type="submit" class="btn" name="delete_ref" value="<?php echo $row_type_product['pt_id'] ?>" onclick="return confirm('ต้องการลบใช่หรือไม่?')" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="edit-info<?php echo $row_type_product['pt_id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Info Type</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="content-contact">

                                                                <input type="hidden" name="pt_id" value="<?php echo $row_type_product['pt_id']; ?>">
                                                                <h6>Type Name :</h6>
                                                                <input type="text" name="type_name" class="form-control" value="<?php echo $row_type_product['type_name']; ?>">

                                                            </div>
                                                            <div class="edit-contact">
                                                                <button class="btn btn-save" name="edit-type-pro">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php  }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-header">
                            <h4 class="card-title">Sup Category</h4>
                            <div class="flex-end">
                            <a href="sub_add_en"><button type="button" class="btn btn-edit1">Add</button></a>
                        </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th width="40%">Sup Category Name</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($row_sub_product as $row_sub_product) { ?>
                                        <tr>
                                            <td align="center"><?php echo $row_sub_product['sub_name']; ?></td>
                                            <td align="center">
                                            <form method="post">
                                                <a type="input" class="btn btn-warning" style="color: #FFFFFF;" data-bs-toggle="modal" href="#edit-sub<?php echo $row_sub_product['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                                <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_sub" value="<?php echo $row_sub_product['id']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="edit-sub<?php echo $row_sub_product['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Sub Category</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="content-contact">
                                                                <input type="hidden" name="id" value="<?php echo $row_sub_product['id']; ?>">
                                                                <h6>Type Name :</h6>
                                                                <input type="text" name="sub_name" class="form-control" value="<?php echo $row_sub_product['sub_name']; ?>">
                                                            </div>
                                                            <div class="edit-contact">
                                                                <button class="btn btn-save" name="edit-sub">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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