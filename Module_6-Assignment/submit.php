<?php
session_start();


  
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$profile_pic = $_FILES['profile-pic'];

if(empty($name) || empty($email) || empty($password) || empty($profile_pic)) {
  echo "All fields are required.";
  exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format.";
  exit;
}

$uploads_dir = 'uploads/';
$filename = uniqid() . '_' . $profile_pic['name'];
$destination = $uploads_dir . $filename;

if(move_uploaded_file($profile_pic['tmp_name'], $destination)) {
  echo "picture uploaded successfully.";
} 

else {
  echo "Error uploading file.";
}


$user_data = array($name, $email, $filename, date("Y-m-d H:i:s"));
$file = fopen('users.csv', 'a');
fputcsv($file, $user_data);
fclose($file);

$_SESSION['name'] = $name;
setcookie('name', $name);

header('Location: display.php');
exit;
