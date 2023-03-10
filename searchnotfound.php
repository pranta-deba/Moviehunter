<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};

require "config.php";

if (isset($_GET['m'])) {
    $mgs = $_GET['m'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search items</title>
    <?php include "include/cssplagin.php"; ?><!-- css all plagin -->
    <link href="assets/css/navfooter.css" rel="stylesheet" />
    <link href="assets/css/searchresult.css" rel="stylesheet" />
    <link href="assets/css/resultnotfound.css" rel="stylesheet" />
</head>

<body>
    <?php include "include/navbar.php"; ?><!-- navbar -->

    <div class="container bg-dark" id="download"><!-- main -->
        <div class="row text-white">

            <div class="col-lg-8"><!-- col -->
                <div class="result">
                    <h5 class="title">Results found : <?= $mgs ?></h5>
                </div>
                <div class="Founditems">
                    <p class="found1">Not Found <span class="mgs"><?= $mgs ?></span></p>
                    <p class="found2">Suggestions: </p>
                    <p class="found3">
                    <li>The movie may not be on the site. Or you searched by entering the wrong name. Search the name of the movie in Google and find out the correct name. Or use the search box below.</li>
                    </p>
                </div>

            </div><!-- col -->

            <div class="col-lg-4 p-4"><!-- col -->
                <h5>Letest Updates</h5>
                <div class="row justify-content-center align-items-center mt-4">
                    <?php
                    $ss = "select * from items where letest_items='1' order by created_at desc limit 6";
                    $lit = $connection->query($ss);
                    $itm = "";
                    while ($row = $lit->fetch_assoc()) {
                        $itm .= '<div class="col-12">
                        <img src="admin/assets/images/' . $row['image'] . '" class="card-img-top m-2" alt="..." style="width: 4rem;">
                        <p class="m-2"><a href="downloadpage.php?id=' . $row['id'] . '" class="text1">' . $row['name'] . '</a> <br>
                        <span class="text2">' . $row['year'] . '</span><br>
                            <span class="text2"><i class="bi bi-star"></i>  ' .  $row['rating'] . '</span>
                        </p>
                    </div>';
                    }
                    echo $itm;
                    ?>
                </div>
            </div><!-- col -->
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
</body>

</html>