<?php
require 'validator.php';
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM info WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
} else {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container box">
    <h2>Welcome <?php echo $row["Fname"]; ?></h2>
    <form action="">
      <a href="logout.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Logout</a>
    </form>

  </div>


</body>

</html>