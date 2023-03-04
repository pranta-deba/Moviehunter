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
    <title>Categories</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <?php include "include/navbar.php"; ?>


    <div class="table-responsive py-5 mx-3">
        <h2 class="text-danger text-center pb-4">All Categories</h2>
        <table class="table table-dark table-hover text-white" style="font-size: .9em;">
            <thead class="thead-dark text-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "select * from categories where 1";
                $allcat = $connection->query($select);
                while ($row = $allcat->fetch_assoc()) {
                    echo "<tr>
                    <th scope='row'>" . $row['id'] . "</th>
                    <td>" . $row['name'] . "</td>
                    <td><img width='50px' src='assets/images/" . $row['image'] . "'/></td>
                    <td>" . $row['created_at'] . "</td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="text-center p-4">
        <a class="text-info h2" href="addcat.php"><i class="bi bi-plus-square-dotted"></i></a>
    </div>

 

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>