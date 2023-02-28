<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
require "include/cheak-admin.php";
require "../config.php";
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
</head>

<body>

    <?php include "include/navbar.php"; ?>

    <!-- style="height: 600px;" -->
    <div class="container  mt-5" id="form-container">
        <h2 class="text-danger text-center m-4 fw-bold">Add Items</h2>
        <form class="row g-3 needs-validation text-secondary mb-4 justify-content-center" action="include/additems.php" method="post" enctype="multipart/form-data" novalidate>
            <div class="col-12 pt-3">
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Category</label>
                <select class="form-select" name="category_id" id="category_id" required>
                    <option selected disabled value="">Choose...</option>
                    <?php
                    $q = "select id,name from categories where 1";
                    $qr = $connection->query($q);
                    while ($row = $qr->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Please select a Category.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Sub Category</label>
                <select class="form-select" name="subcategory_id" id="subcategory_id" required>
                    <option selected disabled value="">Select Categories...</option>

                </select>
                <div class="invalid-feedback">
                    Please select a Sub Category.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Name</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="name" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a Name.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Country</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="country" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a country.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Description</label>
                <div class="input-group has-validation">
                    <textarea type="text" class="form-control" name="description" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required></textarea>
                    <div class="invalid-feedback">
                        Please choose a Description.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Year</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="year" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a year.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Language</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="language" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a Language.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Sub Title</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="sub_title" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a sub title.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Type</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="type" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a type.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Drive Link</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="drive_link" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a drive link.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Image</label>
                <div class="input-group has-validation">
                    <input type="file" class="form-control" name="images" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please import a Image.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Letest Item</label>
                <select class="form-select" id="letest_items" name="letest_items" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                <div class="invalid-feedback">
                    Please choose a Letest Item.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Rating</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="rating" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a rating.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
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
                <p class="text-center  mt-2 mb-0">See all items? <a href="viewitems.php" class="fw-bold text-body"><u class="text-danger">See</u></a></p>
            </div>
        </form>
    </div>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form.js"></script>
    <script src="assets/js/addsubcet-ajax.js"></script>
</body>

</html>