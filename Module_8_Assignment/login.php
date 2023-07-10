<?php
require 'validator.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $useremail = $_POST["useremail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM info WHERE email = '$useremail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="on">
      <div class="user-box">
      <input type="text" name="useremail" id = "useremail" required value="">
      <label for="useremail"> Email : </label>
      </div>
      <div class="user-box">
      <input type="password" name="password" id = "password" required value="">
      <label for="password">Password : </label>
      </div>
      <button class="submit_button" type="submit" name="submit">Login</button>

      <div class="textpart">
        <div><p>Don't have an Account?</p></div>
        <div class="BUtton">
          <a href="registration.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            SignUp
          </a>
        </div>
      </div>
    </form>
    </div>
  </body>
</html>
