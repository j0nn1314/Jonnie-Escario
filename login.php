<?php
$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST")
{
  $mysqli = require __DIR__ . "/database.php";
  $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST["email"]));
  $result = $mysqli->query($sql);
  $user = $result->fetch_assoc();

  if($user)
  {
    if(password_verify($_POST["password"], $user["password_hash"]))
    {
      session_start();
      session_regenerate_id();
      $_SESSION["user_id"] = $user["id"];
      header("Location: index.php");
      exit;
    }
  }
  $is_invalid = true;
  $message = 'Invalid email or password';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"> <!-- Modern sans-serif font -->
  <style>
    body {
      font-family: 'Poppins', sans-serif; /* Contemporary sans-serif font */
      background: linear-gradient(135deg, #c8e6c9, #e3f2fd); /* Soft gradient with calming tones */
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden; /* Prevents unnecessary scrolling */
    }

    .container {
      width: 450px;
      background-color: #ffffff; /* White container background */
      border-radius: 15px; /* Rounded corners */
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
      padding: 40px; /* Generous padding */
      text-align: center; /* Central alignment */
      transition: all 0.3s ease-in-out; /* Smooth transitions */
    }

    h1 {
      color: #388e3c; /* Deep green for emphasis */
      font-size: 2em; /* Larger font for headings */
      text-shadow: 1px 1px rgba(0, 0, 0, 0.1); /* Light shadow effect */
      margin-bottom: 30px; /* Adequate spacing below the heading */
    }

    input[type="email"],
    input[type="password"] {
      width: 100%; /* Full width */
      padding: 12px; /* Sufficient padding */
      border: 1px solid #cfd8dc; /* Light grey border */
      border-radius: 10px; /* Rounded corners */
      background-color: #fafafa; /* Soft background color */
      transition: border-color 0.3s ease-in-out; /* Smooth transitions */
      outline: none; /* No outline on focus */
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
      margin-bottom: 20px; /* Consistent spacing */
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #388e3c; /* Deep green border on focus */
    }

    button {
      width: 100%; /* Full width for the button */
      padding: 12px; /* Adequate padding */
      background-color: #388e3c; /* Deep green background */
      color: #ffffff; /* White text */
      border-radius: 10px; /* Rounded corners */
      font-size: 1em; /* Standard font size */
      cursor: pointer; /* Pointer cursor on hover */
      transition: background-color 0.3s ease-in-out; /* Smooth transitions */
      outline: none; /* No outline on focus */
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
    }

    button:hover {
      background-color: #2e7d32; /* Darker green on hover */
    }

    .links {
      margin-top: 20px; /* Space between the form and links */
      font-size: 0.9em; /* Slightly smaller font for links */
      color: #555; /* Softer grey */
    }

    .links a {
      color: #388e3c; /* Deep green for links */
      text-decoration: none; /* No underline */
      transition: color 0.3s ease-in-out; /* Smooth transitions */
    }

    .links a:hover {
      color: #2e7d32; /* Darker green on hover */
    }

    .decorative-line {
      height: 3px; /* Thin decorative line */
      background: linear-gradient(to right, #388e3c, #2e7d32); /* Gradient with two tones of green */
      border-radius: 3px; /* Rounded edges */
      margin: 20px 0; /* Space around the decorative line */
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Log In</h1>
    <form method="post">
      <input type="email" placeholder="Email" name="email">
      <input type="password" placeholder="Password" name="password">
      <button type="submit">Login</button>
    </form>
    <div class="links">
      <span>Don't have an account? </span><a href="signup.php">Sign up here</a> <!-- Registration link -->
    </div>
    <div class="decorative-line"></div> <!-- Decorative horizontal line -->
  </div>
</body>
</html>

