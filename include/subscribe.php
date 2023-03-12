<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
};
require "../config.php";

if (isset($_POST['submit'])) {
  $email = $_POST['email'];

  // $query = "SELECT * FROM users WHERE 1";
  $query = "SELECT * FROM users WHERE email like '%$email%' limit 1";
  $record = $connection->query($query);

  if (mysqli_num_rows($record) > 0) {
    while ($row = mysqli_fetch_assoc($record)) {
      $dbemail = $row['email'];
    }
    if ($email == $dbemail) {
      header("location:../login.php?email=$email&mgs=Please enter a password!");
    }
  } else {
    header("location:../register.php?m=Please Register Now!");
  }
};
