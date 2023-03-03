<?php
if (isset($_POST['add'])) {
    require "../../config.php";

    $catname = $_POST['catname'];
    $image = null;

    if (isset($_FILES['images'])) {
        $image = uniqid() . ".png";
        move_uploaded_file($_FILES['images']['tmp_name'], "../assets/images/" . $image);
    }

    $insert = "insert into categories values(null,
                    '" . $catname . "',
                    '" . $image . "',
                    null)";

    $connection->query($insert);
    if ($connection->affected_rows) {
        header("location: ../viewcat.php");
    };
};
