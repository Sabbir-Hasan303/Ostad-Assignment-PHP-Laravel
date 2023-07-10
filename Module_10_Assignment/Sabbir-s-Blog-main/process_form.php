<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
	// Check if all fields have a value
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])) {
	  echo "<script>alert('Thank you for contacting us.')</script>";
	}
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $email = $phone = $message = "";
  $nameErr = $emailErr = $phoneErr = $messageErr = "";

  // Validate name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  // Validate email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Check if email address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  // Validate phone number
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // Check if phone number is valid
    if (!preg_match("/^[0-9]{10}$/",$phone)) {
      $phoneErr = "Invalid phone number format";
    }
  }

  // Validate message
  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

  // If all inputs are valid, send the email
  if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($messageErr)) {
    $to = "habid9138@gmail.com";
    $subject = "Contact form submission";
    $body = "Name: $name\nEmail: $email\nPhone Number: $phone\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
      echo "Thank you for contacting us!";
    } else {
      echo "Oops! Something went wrong.";
    }
  }
}

// Function to sanitize form data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>