<?php
if (isset($_POST['add'])) {
    require "../../config.php";

    $category_id = $_POST['category_id'];
    $subcatname = $_POST['subcatname'];
    $image = null;

    if (isset($_FILES['images'])) {
        $image = uniqid() . ".png";
        move_uploaded_file($_FILES['images']['tmp_name'], "../assets/images/" . $image);
    }

    $insert = "insert into subcategories values(null,
                    '" . $category_id . "',
                    '" . $subcatname . "',
                    '" . $image . "',
                    null)";

    $connection->query($insert);
    if ($connection->affected_rows) {
        header("location: ../viewsubcat.php");
    };
};
