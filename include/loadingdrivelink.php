<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require "../config.php";
    $q = "select * from items where id='" . $id . "' limit 1";
    $r = $connection->query($q);
    if (!$r->num_rows) {
        exit;
    }
    $row = $r->fetch_assoc();
    // var_dump($row);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download File</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="../assets/css/loadingdrivelink.css" rel="stylesheet">
</head>

<body>
<h1 class="text-center p-4 text-white"><?= $row['name'] ?></h1>
    <div class="container">
        <a href="<?= $row['drive_link'] ?>" id="download" class="button m-4" target="_blank"><i class="bi bi-arrow-down-circle"></i> Download File</a>
        <button id="btn" class="techly360 glow-on-hover">Click to Download</button>
    </div>


    <script src="../assets/js/jquery-3.6.3.min.js"></script>
    <script>
        var downloadButton = document.getElementById("download");
        var counter = 10;
        var newElement = document.createElement("p");
        newElement.innerHTML = "10 sec";
        var id;
        downloadButton.parentNode.replaceChild(newElement, downloadButton);
        function startDownload() {
            this.style.display = 'none';
            id = setInterval(function() {
                counter--;
                if (counter < 0) {
                    newElement.parentNode.replaceChild(downloadButton, newElement);
                    clearInterval(id);
                } else {
                    newElement.innerHTML = +counter.toString() + " second.";
                }
            }, 1000);
        };
        var clickbtn = document.getElementById("btn");
        clickbtn.onclick = startDownload;
    </script>
</body>

</html>