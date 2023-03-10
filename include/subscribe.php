<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
};
require "../config.php";

if (isset($_POST['submit'])) {
  $email = $_POST['email'];

  $query = "SELECT * FROM users WHERE 1";
  $record = $connection->query($query);

  if ($record->num_rows > 0) {
    $result = $record->fetch_assoc();
    if ($email == $result['email']) {
      header("location:../login.php?email=$email&mgs=Please enter a password!");
    }else {
      header("location:../register.php?m=Please Register Now!");
    }
  }
};
