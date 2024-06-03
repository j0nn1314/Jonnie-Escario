<?php

session_start();
// print_r($_SESSION);

if(isset($_SESSION["user_id"]))
{
  $mysqli = require __DIR__ . "/database.php";
  $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
  $result = $mysqli->query($sql);
  $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"> <!-- Modern sans-serif font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome for icons -->
  <style>
    body {
      font-family: 'Poppins', sans-serif; /* Modern sans-serif font */
      background: linear-gradient(135deg, #c8e6c9, #e3f2fd); /* Softer green-to-blue gradient */
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden; /* Prevent scrolling */
    }

    .container {
      width: 450px;
      background-color: #ffffff; /* White container background */
      border-radius: 20px; /* Rounded corners */
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15); /* Lighter shadow */
      padding: 50px; /* Generous padding */
      text-align: center;
      transition: transform 0.3s ease-in-out; /* Smooth transition for interactivity */
    }

    .container:hover {
      transform: scale(1.05); /* Hover effect */
    }

    h1 {
      color: #388e3c; /* Deep green for heading */
      font-weight: 700; /* Bold font weight */
      font-size: 2em; /* Larger font size */
      text-shadow: 1px 1px rgba(0, 0, 0, 0.1); /* Light shadow */
      margin-bottom: 30px; /* Space below the heading */
    }

    p {
      font-size: 16px; /* Standard font size */
      color: #555; /* Darker grey for text */
      margin-bottom: 20px; /* Space below the text */
    }

    a {
      color: #388e3c; /* Deep green for links */
      text-decoration: none; /* No underline */
      transition: color 0.3s ease-in-out; /* Smooth transitions */
      font-weight: 600; /* Bold font weight */
    }

    a:hover {
      color: #2e7d32; /* Darker green on hover */
    }

    .btn {
      background-color: #388e3c; /* Deep green for buttons */
      color: #ffffff; /* White text */
      border: none;
      border-radius: 10px; /* Rounded corners */
      padding: 12px 25px; /* Padding for comfort */
      cursor: pointer; /* Pointer cursor */
      transition: background-color 0.3s ease-in-out; /* Smooth transitions */
    }

    .btn:hover {
      background-color: #2e7d32; /* Darker green on hover */
    }

    .decorative-line {
      background: linear-gradient(to right, #388e3c, #2e7d32); /* Gradient decorative line */
      height: 3px; /* Thin line */
      border-radius: 5px; /* Rounded corners */
      margin: 20px 0; /* Space around the decorative line */
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome!</h1>

    <?php if(isset($user)): ?>
      <p>Hello, <?= htmlspecialchars($user["username"]); ?>. You are now logged in.</p>
      <button class="btn"><a href="logout.php" style="color: white; text-decoration: none;">Logout</a></button> <!-- Button for logout -->
    <?php else: ?>
      <p><a href="login.php">Login</a> or <a href="signup.php">Sign up</a></p> <!-- Links for login or signup -->
    <?php endif; ?>

    <div class="decorative-line"></div> <!-- Decorative line for visual separation -->
  </div>
</body>
</html>
