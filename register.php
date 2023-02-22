<?php
if (isset($_POST['register'])) {
    require "config.php";
    $name = $connection->escape_string($_POST['username']);
    $email = $connection->escape_string($_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $error = false;
    if ($password !== $cpassword) {
        $error = true;
        header("Location:register.php?m=Password Not Match!");
    }
    if (!$error) {
        $insertQuery = "INSERT INTO users values(null,'" . $name . "','" . $email . "','" . password_hash($password, PASSWORD_DEFAULT) . "','1',null)";
        $connection->query($insertQuery);
        if ($connection->affected_rows) {
            header("Location:login.php?m=Registration successfully. Now you can login");
        };
    };
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <?php include "include/cssplagin.php"; ?><!-- css all plagin -->
    <link href="assets/css/navfooter.css" rel="stylesheet" />
    <link href="assets/css/form.css" rel="stylesheet" />
</head>

<body>
    <?php include "include/navbar.php"; ?><!-- navbar -->

    <div class="container  mt-5" id="form-container">
        <h2 class="text-danger text-center m-4 fw-bold">Register</h2>
        <form class="row g-3 needs-validation text-secondary mb-4" action="" method="post" enctype="multipart/form-data" novalidate>
            <div class="col-12 pt-3">
                <p class="text-center text-danger"><?php echo $_GET['m'] ?? ""; ?></p>
            </div>
            <div class="col-12">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="username" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please Enter a Email.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <label for="validationCustom03" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please Enter a Password.
                </div>
            </div>
            <div class="col-12">
                <label for="validationCustom03" class="form-label">Password</label>
                <input type="password" class="form-control" name="cpassword" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please Confirm Password.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="agree" value="yes" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-danger px-4" type="submit" name="register">Register</button>
            </div>
            <div class="col-12 text-center text-white">
                <p class="text-center  mt-2 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u class="text-danger">Login here</u></a></p>
            </div>
        </form>
    </div>

    <?php include "include/footer.php"; ?><!-- footer -->

    <?php include "include/jsplagin.php"; ?><!-- footer -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form.js"></script>
</body>

</html>