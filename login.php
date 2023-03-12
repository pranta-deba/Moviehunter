<?php
if (session_status() === PHP_SESSION_NONE) {
   session_start();
};

  if(isset($_POST['login'])){

    require "config.php";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email' limit 1";
    $record = $connection->query($query);

    if($record->num_rows > 0){
        $result = $record->fetch_assoc();

        if(password_verify($password,$result['password'])){
            $_SESSION['userid'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['loggedin'] = true;
            $_SESSION['role'] = $result['role'];
            if($result['role'] == "1"){
                header("location:index.php");
            };
            if($result['role'] == "2"){
                header("location:admin/index.php");
            };
        }else{
            header("location:login.php?email=$email&mgs=Password not match");
        }
    }else{
        header("location:register.php?m=Please Register Now!");
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

    <div class="container mt-5 mb-5" id="form-container">
        <h2 class="text-danger text-center m-4 fw-bold">Login</h2>
        <form class="row g-3 needs-validation text-secondary mb-4" action="" method="post" novalidate>
            <div class="col-12 pt-3">
                <p class="text-center text-success"><?php echo $_GET['m'] ?? ""; ?></p>
                <p class="text-center text-danger"><?php echo $_GET['mgs'] ?? ""; ?></p>
            </div>
            <div class="col-12">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text text-danger" id="inputGroupPrepend">@</span>
                    <input type="email" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $_GET['email'] ?? ""; ?>" required>
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
            <div class="col-12 text-center">
                <button class="btn btn-danger px-4" type="submit" name="login">Login</button>
            </div>
            <div class="col-12 text-center text-white">
                <p class="text-center  mt-2 mb-0">Have not an account? <a href="register.php" class="fw-bold text-body"><u class="text-danger">Register here</u></a></p>
            </div>
        </form>
    </div>

    <?php include "include/footer.php"; ?><!-- footer -->

    <?php include "include/jsplagin.php"; ?><!-- footer -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form.js"></script>
</body>

</html>