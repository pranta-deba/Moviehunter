<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark pb-2"">
        <div class=" container">
    <a class="navbar-brand" href="index.php"><span class="text-info h4">D</span><span class="text-info">ash</span><span class="text-danger h4">Board</span></a>
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
            <?php if (isset($_SESSION['loggedin'])  && $_SESSION['loggedin'] && $_SESSION['role'] == "2") { ?>
                <li class="nav-item"><a class="nav-link" href="../index.php"> Site </a></li>
            <?php } ?>
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {  ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['username'] ?></a>
                    <ul class="dropdown-menu dropdown-menu-left bg-dark">
                        <li><a class="dropdown-item" href="javascript:void(0)">Pofile</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Setting</a></li>
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            <?php } else { ?>
                <li class="nav-item"><a class="nav-link" href="login.php"> Singin </a></li>
            <?php }; ?>
        </ul>
    </div>
    </div>
</nav>