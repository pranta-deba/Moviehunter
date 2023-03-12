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
    <title>Items</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <?php include "include/navbar.php"; ?>

    <div class="table-responsive py-5 mx-3">
        <h2 class="text-danger text-center pb-4">All Items</h2>
        <table class="table table-dark table-hover text-white" style="font-size: .8em;">
            <thead class="thead-dark text-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cat.</th>
                    <th scope="col">Sub Cat.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">Description</th>
                    <th scope="col">Year</th>
                    <th scope="col">Language</th>
                    <th scope="col">Sub Title</th>
                    <th scope="col">Type</th>
                    <th scope="col">Drive Link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Letest</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "select * from items where 1";
                $allitems = $connection->query($select);
                while ($row = $allitems->fetch_assoc()) {
                    echo "<tr>
                    <th scope='row'>" . $row['id'] . "</th>
                    <td>" . $row['category_id'] . "</td>
                    <td>" . $row['subcategory_id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['country'] . "</td>
                    <td>" . $row['description'] . "</td>
                    <td>" . $row['year'] . "</td>
                    <td>" . $row['language'] . "</td>
                    <td>" . $row['sub_title'] . "</td>
                    <td>" . $row['type'] . "</td>
                    <td>" . $row['drive_link'] . "</td>
                    <td><img width='50px' src='assets/images/" . $row['image'] . "'/></td>
                    <td>" . $row['letest_items'] . "</td>
                    <td>" . $row['rating'] . "</td>
                    <td><a class='text-decoration-none text-primary' href='edititems.php?id={$row['id']}'>Edit</a> | <a onclick=\"return confirm('Are you sure want to delete this?');\" class='text-decoration-none text-danger' href='deleteitems.php?id={$row['id']}'>Delete</a></td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="text-center p-4">
        <a class="text-info h2" href="additems.php"><i class="bi bi-plus-square-dotted"></i></a>
    </div>



    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>