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
    $screenshot1 = null;
    $screenshot2 = null;
    $screenshot3 = null;
    $letest_items = $_POST['letest_items'];
    $rating = $_POST['rating'];

    if (isset($_FILES['images'])) {
        $image = uniqid() . ".png";
        move_uploaded_file($_FILES['images']['tmp_name'], "../assets/images/" . $image);
    }
    if (isset($_FILES['screenshot1'])) {
        $screenshot1 = uniqid() . ".png";
        move_uploaded_file($_FILES['screenshot1']['tmp_name'], "../assets/images/" . $screenshot1);
    }
    if (isset($_FILES['screenshot2'])) {
        $screenshot2 = uniqid() . ".png";
        move_uploaded_file($_FILES['screenshot2']['tmp_name'], "../assets/images/" . $screenshot2);
    }
    if (isset($_FILES['screenshot3'])) {
        $screenshot3 = uniqid() . ".png";
        move_uploaded_file($_FILES['screenshot3']['tmp_name'], "../assets/images/" . $screenshot3);
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
    '" . $screenshot1 . "',
    '" . $screenshot2 . "',
    '" . $screenshot3 . "',
    '" . $letest_items . "',
    '" . $rating . "',
    null)";

    $connection->query($insert);
    if ($connection->affected_rows) {
        header("location: ../viewitems.php");
    };
};
