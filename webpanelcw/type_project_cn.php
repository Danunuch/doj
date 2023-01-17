<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/doj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login'>";
}

$data_ref = $conn->prepare("SELECT * FROM category_ref_cn");
$data_ref->execute();
$row_ref = $data_ref->fetchAll();


if (isset($_POST['edit-ref'])) {
    $ref_id = $_POST['ref_id'];
    $ref_name = $_POST['ref_name'];

    $edit_project_ref = $conn->prepare("UPDATE category_ref_cn SET ref_name = :ref_name WHERE ref_id = :ref_id");
    $edit_project_ref->bindParam(":ref_name", $ref_name);
    $edit_project_ref->bindParam(":ref_id", $ref_id);
    $edit_project_ref->execute();

    if ($edit_project_ref) {
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
        echo "<meta http-equiv='refresh' content='2;url=type_project_cn'>";
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
                <h3>Type Project</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Type Project</h4>
                        <div class="flex-end">
                            <a href="type_project"><button type="button" class="btn btn-edit1">TH</button></a>
                            <a href="type_project_en"><button type="button" class="btn btn-edit1">EN</button></a>
                            <a href="type_project_add_cn"><button type="button" class="btn btn-edit1">Add</button></a>
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
                                    foreach ($row_ref as $row_ref) { ?>
                                        <tr>
                                            <td align="center"><?php echo $row_ref['ref_name']; ?></td>
                                            <td align="center">
                                                <a type="input" class="btn btn-warning" style="color: #FFFFFF;" data-bs-toggle="modal" href="#edit-info<?php echo $row_ref['ref_id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                                <!-- <button type="button" class="btn" style="background-color:#ffc107; color: #FFFFFF;"><i class="bi bi-pencil-square"></i></button> -->
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="edit-info<?php echo $row_ref['ref_id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Info Contact</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="content-contact">

                                                                <input type="hidden" name="ref_id" value="<?php echo $row_ref['ref_id']; ?>">
                                                                <h6>Type Name :</h6>
                                                                <input type="text" name="ref_name" class="form-control" value="<?php echo $row_ref['ref_name']; ?>">

                                                            </div>
                                                            <div class="edit-contact">
                                                                <button class="btn btn-save" name="edit-ref">Save</button>
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
            </section>
            <?php include('footer.php'); ?>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>