<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
if (isset($_GET['search'])) {
    require "config.php";
    $searchvalue = $_GET['value'];

    $sql = "SELECT * FROM items WHERE name like '%$searchvalue%' limit 1";
    $res = $connection->query($sql);

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $name = $row['name'];
            $year = $row['year'];
            $description = $row['description'];
            $image = $row['image'];
            $rating = $row['rating'];
        }
    } else {
        header("location:searchnotfound.php?m= $searchvalue");
    }
};
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
</head>

<body>
    <?php include "include/navbar.php"; ?><!-- navbar -->

    <div class="container bg-dark" id="download"><!-- main -->
        <div class="row text-white">

            <div class="col-lg-8"><!-- col -->
                <div class="result">
                    <h5 class="title">Results found : <?= $searchvalue ?></h5>
                </div>
                <div class="resultitems">
                    <img src="admin/assets/images/<?= $image ?>" class="card-img-top m-2" alt="..." style="max-width: 5rem;">
                    <p class="m-2"><a href="downloadpage.php?id=<?= $id ?>" class="text1"><?= $name ?></a> <br>
                        <span class="text2"><?= $year ?></span>
                    </p>
                </div>

            </div><!-- col -->

            <div class="col-lg-4 p-4">
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
</body>

</html>