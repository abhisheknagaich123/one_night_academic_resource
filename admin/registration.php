<?php
// Check if the form is submitted

// Start Session

require('connection.php');
require('function.php');

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    echo "<script>location.href='index.php';</script>";
    // Add your logged-in user content here
} else {
    // If not logged in, provide a login form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process login form
        $inputUsername = $_POST['username'];
        $inputPassword = $_POST['password'];

        // Validate credentials (sample validation, replace with your authentication logic)
        $sql = "SELECT username FROM login WHERE username = '$inputUsername' AND password = '$inputPassword'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Authentication successful, set session variables
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['username'];
            $_SESSION['start'] = time();  
            // Destroying session after 1 minute 
            $_SESSION['expire'] = $_SESSION['start'] + (24*60 * 60) ; 
           echo "<script>location.href='index.php';</script>";
            // Add your logged-in user content here
        } else {
            echo "";
             echo "<script>alert('Invalid username or password.'); location.href='registration.php';</script>";
        }
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300">
    <link rel="stylesheet" href="regstyle.css">
    
</head>
<body><div class="container">
  <div class="card">
    <h2>Login</h2>
    <form  method="post">
      <input type="text" id="username" name="username" placeholder="Username" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</div>
</body>
</html>
