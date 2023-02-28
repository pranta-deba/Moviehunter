<?php
// add items form to database
if (isset($_POST['add'])) {

    require "../../config.php";

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
    $image = null;
    $letest_items = $_POST['letest_items'];
    $rating = $_POST['rating'];

    if (isset($_FILES['images'])) {
        $image = uniqid() . ".png";
        move_uploaded_file($_FILES['images']['tmp_name'], "../assets/images/" . $image);
    }

    $insert = "insert into items values(null,
    '" . $category_id . "',
    '" . $subcategory_id . "',
    '" . $name . "',
    '" . $country . "',
    '" . $description . "',
    '" . $year . "',
    '" . $language . "',
    '" . $sub_title . "',
    '" . $type . "',
    '" . $drive_link . "',
    '" . $image . "',
    '" . $letest_items . "',
    '" . $rating . "',
    null)";

    $connection->query($insert);
    if ($connection->affected_rows) {
        header("location: ../viewitems.php");
    };
};
