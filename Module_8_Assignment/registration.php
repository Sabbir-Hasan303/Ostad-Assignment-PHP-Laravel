<?php
require 'validator.php';
if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}
if (isset($_POST["submit"])) {
  $Fname = $_POST["Fname"];
  $Lname = $_POST["Lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM info WHERE email = '$email'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo
    "<script> alert('Email Already Exists'); </script>";
  } else {
    if ($password == $confirmpassword) {
      $query = "INSERT INTO info VALUES('','$Fname','$Lname','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    } else {
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="box">
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="on">
      <div class="user-box">
        <input type="text" name="Fname" id="Fname" required value="">
        <label for="Fname">Name : </label>
      </div>
      <div class="user-box">
        <input type="text" name="Lname" id="Lname" required value="">
        <label for="Lname">Last Name : </label>
      </div>
      <div class="user-box">
        <input type="email" name="email" id="email" required value="">
        <label for="email">Email : </label>
      </div>
      <div class="user-box">
        <input type="password" name="password" id="password" required value="">
        <label for="password">Password : </label>
      </div>
      <div class="user-box">
        <input type="password" name="confirmpassword" id="confirmpassword" required value="">
        <label for="confirmpassword">Confirm Password : </label>
      </div>
      <button class="submit_button" type="submit" name="submit">Register</button><br>
      <div class="textpart">
        <div><p>Already have an Account?</p></div>
        <div class="BUtton">
          <a href="login.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Login
          </a>
        </div>
      </div>
    </form>

  </div>
</body>

</html>