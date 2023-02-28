<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
require "include/cheak-admin.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet">
</head>

<body>

    <?php include "include/navbar.php"; ?>


    <div class="container  mt-5" id="form-container" style="height: 600px;">
        <h2 class="text-danger text-center m-4 fw-bold">Add Category</h2>
        <form class="row g-3 needs-validation text-secondary mb-4" action="" method="post" enctype="multipart/form-data" novalidate>
            <div class="col-12 pt-3">
            </div>
            <div class="col-12">
                <label for="validationCustomUsername" class="form-label">Name</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="catname" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a Name.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <label for="validationCustomUsername" class="form-label">Image</label>
                <div class="input-group has-validation">
                    <input type="file" class="form-control" name="image" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please import a Image.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="agree" value="yes" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-danger px-4" type="submit" name="add">Add</button>
            </div>
            <div class="col-12 text-center text-white">
                <p class="text-center  mt-2 mb-0">See all cetagory? <a href="include/viewcat.php" class="fw-bold text-body"><u class="text-danger">See</u></a></p>
            </div>
        </form>
    </div>


   

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form.js"></script>
</body>

</html>