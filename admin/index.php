<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
require "include/cheak-admin.php";
require "../config.php"

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

    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark pb-2"">
        <div class=" container">
        <a class="navbar-brand" href="index.php"><span class="text-info h4">A</span><span class="text-info">dmin</span><span class="text-danger h4">Panel</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php"> Home </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Category </a>
                    <ul class="dropdown-menu dropdown-menu-right bg-dark">
                        <li><a class="dropdown-item" href="addcat.php"> Add</a></li>
                        <li><a class="dropdown-item" href="viewcat.php"> View</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Sub Category </a>
                    <ul class="dropdown-menu dropdown-menu-right bg-dark">
                        <li><a class="dropdown-item" href="addsubcat.php"> Add</a></li>
                        <li><a class="dropdown-item" href="viewsubcat.php"> View</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Items </a>
                    <ul class="dropdown-menu dropdown-menu-left bg-dark">
                        <li><a class="dropdown-item" href="additems.php"> Add</a></li>
                        <li><a class="dropdown-item" href="viewitems.php"> View</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="../index.php"> Site </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['username'] ?></a>
                    <ul class="dropdown-menu dropdown-menu-left bg-dark">
                        <li><a class="dropdown-item" href="javascript:void(0)">Pofile</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Setting</a></li>
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>


    <div class=" bg-dark">
        <h1 class="text-center text-danger fw-bold p-5">Dashboard</h1>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center align-items-center m-2 text-white text-center">
            <div class="col-lg-3 col-md-6 col-sm-12 m-4">
                <?php
                $query1 = "select count(*) as total from items where 1";
                $result1 = $connection->query($query1);
                $totalitems = $result1->fetch_assoc();
                ?>
                <div class="card bg-dark" style="width: 15rem;">
                    <div class="card-body">
                        <h6 class="card-text text-center text-danger">Total Items</h6>
                        <h1 class="card-text text-center"><?= $totalitems['total'] ?></h1>
                        <hr>
                        <p class="card-text text-center"><a class="btn btn-outline-danger" href="viewitems.php">View Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 m-4">
                <?php
                $query2 = "select count(*) as total from categories where 1";
                $result2 = $connection->query($query2);
                $totalcategories = $result2->fetch_assoc();
                ?>
                <div class="card bg-dark" style="width: 15rem;">
                    <div class="card-body">
                        <h6 class="card-text text-center text-danger">Total Categories</h6>
                        <h1 class="card-text text-center"><?= $totalcategories['total'] ?></h1>
                        <hr>
                        <p class="card-text text-center"><a class="btn btn-outline-danger" href="viewcat.php">View Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 m-4">
                <?php
                $query3 = "select count(*) as total from subcategories where 1";
                $result3 = $connection->query($query3);
                $totalsubcategories = $result3->fetch_assoc();
                ?>
                <div class="card bg-dark" style="width: 15rem;">
                    <div class="card-body">
                        <h6 class="card-text text-center text-danger">Total Sub Categories</h6>
                        <h1 class="card-text text-center"><?= $totalsubcategories['total'] ?></h1>
                        <hr>
                        <p class="card-text text-center"><a class="btn btn-outline-danger" href="viewsubcat.php">View Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 m-4">
                <?php
                $query4 = "select count(*) as total from users where 1";
                $result4 = $connection->query($query4);
                $totalusers = $result4->fetch_assoc();
                ?>
                <div class="card bg-dark" style="width: 15rem;">
                    <div class="card-body">
                        <h6 class="card-text text-center text-danger">Total Users</h6>
                        <h1 class="card-text text-center"><?= $totalusers['total'] ?></h1>
                        <hr>
                        <p class="card-text text-center"><a class="btn btn-outline-danger" href="viewusers.php">View Details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>