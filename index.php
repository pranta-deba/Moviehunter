<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
require "config.php";
$selectQ = "select * from items where letest_items='1' order by created_at desc limit 20";
$hotitems = $connection->query($selectQ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include "include/cssplagin.php"; ?><!-- css all plagin -->
    <link href="assets/css/navfooter.css" rel="stylesheet" />
    <link href="assets/css/homebody1.css" rel="stylesheet" />
    <link href="assets/css/homebody2.css" rel="stylesheet" />
</head>

<body>
    <?php include "include/navbar.php"; ?><!-- navbar -->
    <div class="container bg-dark" id="MainContainer"><!-- main -->


        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div id="product-container" class="owl-carousel"><!-- carousel -->
                    <?php
                    $items = "";
                    while ($row = $hotitems->fetch_assoc()) {
                        $items .= '<div class="card bg-dark">
                        <img src="admin/assets/images/' . $row['image'] . '" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <a href="#" class="text-decoration-none">' . $row['name'] . '</a>
                            <div class="text-white year">
                                <p class="">' . $row['year'] . '</p>
                            </div>
                        </div>
                    </div>';
                    }
                    echo $items;
                    ?>
                </div><!-- carousel -->

                <div class="hindi-subtitle"><!-- hindi-subtitle -->
                    <h5 class="title">Bangla Subtitled</h5>
                    <div id="hindi-movie" class="owl-carousel">
                        <div class="card me-2" style="width: 8rem;">
                            <img src="assets/images/h1.png" class="card-img-top" alt="...">
                            <div class="text">
                                <a href="#" class="card-text">Some quick example text to build on.</a>
                            </div>
                        </div>
                        <div class="card me-2" style="width: 8rem;">
                            <img src="assets/images/h1.png" class="card-img-top" alt="...">
                            <div class="text">
                                <a href="#" class="card-text">Some quick example text to build on.</a>
                            </div>
                        </div>
                        <div class="card me-2" style="width: 8rem;">
                            <img src="assets/images/h1.png" class="card-img-top" alt="...">
                            <div class="text">
                                <a href="#" class="card-text">Some quick example text to build on.</a>
                            </div>
                        </div>
                        <div class="card me-2" style="width: 8rem;">
                            <img src="assets/images/h1.png" class="card-img-top" alt="...">
                            <div class="text">
                                <a href="#" class="card-text">Some quick example text to build on.</a>
                            </div>
                        </div>
                        <div class="card me-2" style="width: 8rem;">
                            <img src="assets/images/h1.png" class="card-img-top" alt="...">
                            <div class="text">
                                <a href="#" class="card-text">Some quick example text to build on.</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div><!-- hindi-subtitle -->

                <div class="letest-movies"><!-- letest-movies -->
                    <h5 class="title">Latest Movies</h5>
                    <div class="row grid">
                        <?php
                        $alli = "select * from items where 1";
                        $resul = $connection->query($alli);
                        $mee = "";
                        while ($row = $resul->fetch_assoc()) {
                            $mee .= '<div class="col m-2">
                            <div class="card" style="width: 9rem;">
                                <img src="admin/assets/images/' . $row['image'] . '" class="card-img-top" alt="...">
                                <div class="text">
                                    <a href="#" class="card-text">' . $row['name'] . '</a>
                                    <p class="sal">' . $row['year'] . '</p>
                                </div>
                            </div>
                        </div>';
                        }
                        echo $mee;
                        ?>
                    </div>
                    <hr>
                </div><!-- letest-movies -->
                <div class="vlog-container"><!-- vlog -->
                    <div class="vlog">
                        <h5 class="title1">Last entries</h5>
                        <a href="#" class="title2">See all</a>
                    </div>
                    <div class="row m-4">
                        <div class="col">
                            <p><span class="title">How safe is it to use moviehunter's drive share service? </span><br>
                                <span class="about">How safe is it to use moviehunter's drive share service?
                                    The questions you have in mind!! Granting my drive permissions to moviehunter.</span>
                            </p>
                            <p class="date"><span class="day">10</span><br><span class="mount">March</span></p>
                        </div>
                        <hr>
                        <div class="col">
                            <p><span class="title">(IDM) Google Drive Link Expire Solution </span><br>
                                <span class="about">Being connected to the internet surely downloads various files like movies, songs, apps etc. One problem that often occurs while downloading is download failure.</span>
                            </p>
                            <p class="date"><span class="day">15</span><br><span class="mount">April</span></p>
                        </div>
                        <hr>
                        <div class="col">
                            <p><span class="title">(UC Browser) Google Drive Link Expire Solution</span><br>
                                <span class="about">
                                    Link Expire download failure problem solution? Read every word carefully even if it takes 2 minutes. Because, if the MBs are lost, the loss will be yours. not mine.</span>
                            </p>
                            <p class="date"><span class="day">15</span><br><span class="mount">May</span></p>
                        </div>
                    </div>
                </div><!-- vlog -->
            </div>

            <div class="col-lg-4 p-4" id="letest-movie">
                <h5>Letest Updates</h5>
                <div class="row justify-content-center align-items-center mt-4">
                    <?php
                    $ss = "select * from items where letest_items='1' order by created_at desc limit 15";
                    $lit = $connection->query($ss);
                    $itm = "";
                    while ($row = $lit->fetch_assoc()) {
                        $itm .= '<div class="col-12">
                        <img src="admin/assets/images/' . $row['image'] . '" class="card-img-top m-2" alt="..." style="width: 4rem;">
                        <p class="m-2"><a href="#" class="text1">' . $row['name'] . '</a> <br>
                        <span class="text2">' . $row['year'] . '</span><br>
                            <span class="text2"><i class="bi bi-star"></i>  ' .  $row['rating'] . '</span>
                        </p>
                    </div>';
                    }
                    echo $itm;
                    ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items-center m-3">
            <p class="lorem" style="color: white; opacity: 60%; font-size: .8em;">
                movieHunter does not rip or host any files on its servers. All files or contents hosted on third party websites. movieHunter doesn't accept the responsibility for contents hosted on third party websites. Also movieHunter doesn't RIP/Pirate any file. We just collect links from other websites. Nothing Else.</p>
        </div>
        <div class="text-sm-start">
            <a href="#" class="text-danger h4"><i class="bi bi-arrow-up"></i></a>
        </div>
    </div><!-- main -->


    <?php include "include/footer.php"; ?><!-- footer -->

    <?php include "include/jsplagin.php"; ?><!-- jsplagin -->
    <!-- <script src="assets/js/owl.js"></script> -->
    <script src="assets/js/owl1.js"></script>
    <script src="assets/js/owl2.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>