<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "moatasembellah80@gmail.com"; // Replace with your email address
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "success"; // You can customize this success message as needed
  } else {
    echo "error"; // You can customize this error message as needed
  }
}
