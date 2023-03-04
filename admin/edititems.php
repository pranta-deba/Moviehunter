<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
require "include/cheak-admin.php";
require "../config.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $category_id = $_POST['category_id'];
    $subcategory_id = $_POST['subcategory_id'];
    $name = $_POST['name'];
    $country = $_POST['country'];
    $description = $_POST['description'];
    $year = $_POST['year'];
    $language = $_POST['language'];
    $sub_title = $_POST['sub_title'];
    $type = $_POST['type'];
    $drive_link = $_POST['drive_link'];
    $letest_items = $_POST['letest_items'];
    $rating = $_POST['rating'];

    $update = "UPDATE `items` SET `category_id`='" . $category_id . "',
                                `subcategory_id`='" . $subcategory_id . "',
                                `name`='" . $name . "',
                                `country`='" . $country . "',
                                `description`='" . $description . "',
                                `year`='" . $year . "',
                                `language`='" . $language . "',
                                `sub_title`='" . $sub_title . "',
                                `type`='" . $type . "',
                                `drive_link`='" . $drive_link . "',
                                `letest_items`='" . $letest_items . "',
                                `rating`='" . $rating . "' WHERE id='" . $id . "'";
    $connection->query($update);
    if ($connection->affected_rows) {
        header("location: viewitems.php");
    };
};

$p = "select * from items where id='" . $_GET['id'] . "' limit 1";
$r = $connection->query($p);
$p = $r->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Items</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <?php include "include/navbar.php"; ?>

    <!-- style="height: 600px;" -->
    <div class="container  mt-5" id="form-container">
        <h2 class="text-danger text-center m-4 fw-bold">Update Items</h2>
        <form class="row g-3 needs-validation text-secondary mb-4 justify-content-center" action="" method="post" enctype="multipart/form-data" novalidate>
            <div class="col-12 pt-3">
                <input type="hidden" name="id" value="<?= $p['id'] ?>">
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
                    <input type="text" class="form-control" name="name" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="<?= $p['name'] ?>">
                    <div class="invalid-feedback">
                        Please choose a Name.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Country</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="country" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="<?= $p['country'] ?>">
                    <div class="invalid-feedback">
                        Please choose a country.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Description</label>
                <div class="input-group has-validation">
                    <textarea type="text" class="form-control" name="description" id="validationCustomUsername" aria-describedby="inputGroupPrepend"><?= $p['description'] ?></textarea>
                    <div class="invalid-feedback">
                        Please choose a Description.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Year</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="year" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="<?= $p['year'] ?>">
                    <div class="invalid-feedback">
                        Please choose a year.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Language</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="language" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="<?= $p['language'] ?>">
                    <div class="invalid-feedback">
                        Please choose a Language.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Sub Title</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="sub_title" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="<?= $p['sub_title'] ?>">
                    <div class="invalid-feedback">
                        Please choose a sub title.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Type</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="type" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="<?= $p['type'] ?>">
                    <div class="invalid-feedback">
                        Please choose a type.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Drive Link</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="drive_link" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="<?= $p['drive_link'] ?>">
                    <div class="invalid-feedback">
                        Please choose a drive link.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Letest Item</label>
                <select class="form-select" id="letest_items" name="letest_items" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="0" <?= $p['letest_items'] == "0" ? "selected" : "" ?>>No</option>
                    <option value="1" <?= $p['letest_items'] == "1" ? "selected" : "" ?>>Yes</option>
                </select>
                <div class="invalid-feedback">
                    Please choose a Letest Item.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Rating</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="rating" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="<?= $p['name'] ?>">
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
                <button class="btn btn-danger px-4" type="submit" name="update">Update</button>
            </div>
            <div class="col-12 text-center text-white">
                <p class="text-center  mt-2 mb-0">See all items? <a href="viewitems.php" class="fw-bold text-body"><u class="text-danger">See</u></a></p>
            </div>
        </form>
    </div>
    <div class="mb-5"></div>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form.js"></script>
    <script src="assets/js/addsubcet-ajax.js"></script>
</body>

</html>