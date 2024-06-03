<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"> <!-- Using 'Poppins' font for modern look -->
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
    }

    .container {
      width: 450px;
      background-color: #ffffff; /* White container background */
      border-radius: 20px; /* Rounded corners */
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); /* Subtle shadow */
      padding: 50px; /* Generous padding */
      text-align: center;
      transition: transform 0.3s ease-in-out; /* Smooth transition for hover effect */
    }

    .container:hover {
      transform: scale(1.05); /* Hover effect for interactivity */
    }

    h1 {
      color: #388e3c; /* Deep green for heading */
      font-weight: 600; /* Bold font weight */
      letter-spacing: 1px;
      margin-bottom: 30px;
    }

    .decorative-line {
      background: linear-gradient(to right, #388e3c, #0288d1); /* Green-to-blue gradient decorative line */
      height: 3px;
      border-radius: 5px; /* Rounded corners */
      margin: 20px 0; /* Space around the decorative line */
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: calc(100% - 20px); /* Wide input fields */
      padding: 12px; /* Padding for comfort */
      margin: 10px; /* Margin between elements */
      border: none;
      border-radius: 10px; /* Rounded corners */
      background-color: #e0f7fa; /* Soft blue background for input */
      font-size: 16px; /* Readable font size */
      transition: background-color 0.3s ease; /* Smooth transitions */
      outline: none; /* No outline on focus */
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      background-color: #b3e5fc; /* Darker background on focus */
    }

    button {
      width: calc(100% - 20px); /* Button with full width minus margin */
      padding: 15px; /* Padding for comfort */
      background-color: #388e3c; /* Deep green for buttons */
      color: #ffffff; /* White text on button */
      border: none;
      border-radius: 10px; /* Rounded corners */
      cursor: pointer; /* Pointer cursor */
      font-size: 16px; /* Readable font size */
      transition: background-color 0.3s ease; /* Smooth transitions */
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15); /* Slight shadow */
    }

    button:hover {
      background-color: #2e7d32; /* Darker green on hover */
    }

    .links {
      font-size: 14px; /* Smaller font size */
      margin-top: 20px; /* Space above the links */
    }

    .links a {
      color: #388e3c; /* Deep green for links */
      text-decoration: none; /* No underline */
      transition: color 0.3s ease; /* Smooth transitions */
    }

    .links a:hover {
      color: #2e7d32; /* Darker green on hover */
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Get Started!</h1>
    <div class="decorative-line"></div> <!-- Horizontal gradient line -->
    <form action="process_signup.php" method="POST" novalidate>
      <input type="text" placeholder="Your Name" name="username" required> <!-- Rounded input field -->
      <input type="email" placeholder="Your Email" name="email" required> <!-- Rounded input field -->
      <input type="password" placeholder="Create a Password" id="password" name="password" required> <!-- Rounded input field -->
      <input type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password" required> <!-- Rounded input field -->
      <button type="submit">Sign Up</button> <!-- Button with hover effect -->
      <div class="links"> <!-- Links for login -->
        <span>Already have an account? </span><a href="login.php">Login here</a>
      </div>
    </form>
  </div>
</body>
</html>
