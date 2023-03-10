<div class="bg-dark pt-2">
    <div class="container" id="form-search">
        <form class="form-search" method="get" action="searchresult.php">
            <input type="text" name="value" placeholder="search here for.." style="background-color: rgb(220, 220, 220);">
            <button type="submit" name="search"><i class="bi bi-search"></i></button>
        </form>
    </div>
</div>

<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark pb-2"">
        <div class=" container">
    <a class="navbar-brand" href="index.php"><span class="text-info h4">M</span><span class="text-info">ovie</span><span class="text-danger h4"><i class="bi bi-lightning-charge"></i>Hunter</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php"> Home </a></li>
            <li class="nav-item"><a class="nav-link" href="#"> trailer </a></li>
            <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> movies </a>
                <ul class="dropdown-menu dropdown-menu-right bg-dark">
                    <li><a class="dropdown-item" href="#"> Hollywood</a></li>
                    <li><a class="dropdown-item" href="#"> Bollywood</a></li>
                    <li><a class="dropdown-item" href="#"> Letest Released</a></li>
                    <li><a class="dropdown-item" href="#"> Adult Movies </a></li>
                    <li><a class="dropdown-item" href="#">anime</a></li>
                    <li><a class="dropdown-item" href="#">imdb top movies</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> genre </a>
                <ul class="dropdown-menu dropdown-menu-right bg-dark">
                    <li><a class="dropdown-item" href="#">action</a></li>
                    <li><a class="dropdown-item" href="#">adventure</a></li>
                    <li><a class="dropdown-item" href="#">animated</a></li>
                    <li><a class="dropdown-item" href="#">comedy</a></li>
                    <li><a class="dropdown-item" href="#">crime</a></li>
                    <li><a class="dropdown-item" href="#">fantasy</a></li>
                    <li><a class="dropdown-item" href="#">horror</a></li>
                    <li><a class="dropdown-item" href="#">mystery</a></li>
                    <li><a class="dropdown-item" href="#">sci-fi</a></li>
                    <li><a class="dropdown-item" href="#">romance</a></li>
                    <li><a class="dropdown-item" href="#">documentary</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">web series</a>
                <ul class="dropdown-menu dropdown-menu-left bg-dark">
                    <li><a class="dropdown-item" href="#">hindi dubbed</a></li>
                    <li><a class="dropdown-item" href="#">english</a></li>
                    <li><a class="dropdown-item" href="#">english tv show</a></li>
                    <li><a class="dropdown-item" href="#">english web series</a></li>
                    <li><a class="dropdown-item" href="#">hindi tv show</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> ott </a>
                <ul class="dropdown-menu dropdown-menu-right bg-dark">
                    <li><a class="dropdown-item" href="#">netflix</a></li>
                    <li><a class="dropdown-item" href="#">amazon prime video</a></li>
                    <li><a class="dropdown-item" href="#">hbomax</a></li>
                    <li><a class="dropdown-item" href="#">hulu</a></li>
                    <hr style="color: white;">
                    <li><a class="dropdown-item" href="#">youtube premium</a></li>
                    <li><a class="dropdown-item" href="#">showtime</a></li>
                    <li><a class="dropdown-item" href="#">crackle</a></li>
                    <li><a class="dropdown-item" href="#">starz</a></li>
                    <hr style="color: white;">
                    <li><a class="dropdown-item" href="#">mx player</a></li>
                    <li><a class="dropdown-item" href="#">playflix</a></li>
                </ul>
            </li>
            <?php if (isset($_SESSION['loggedin'])  && $_SESSION['loggedin'] && $_SESSION['role'] == "2") { ?>
                <li class="nav-item"><a class="nav-link" href="admin/index.php"> Dashboard </a></li>
            <?php } ?>
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {  ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['username'] ?></a>
                    <ul class="dropdown-menu dropdown-menu-left bg-dark">
                        <li><a class="dropdown-item" href="javascript:void(0)">Pofile</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Setting</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            <?php } else { ?>
                <li class="nav-item"><a class="nav-link" href="login.php"> Singin </a></li>
            <?php }; ?>
        </ul>
    </div>
    </div>
</nav>