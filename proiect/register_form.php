<?php



session_start();
$servername = "localhost"; // Change this to your MySQL server name
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "login"; // Change this to your MySQL database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST["usermail"];
    $password = $_POST["password"];
    $confirm_password = $_POST["cpassword"];

    // Check if the password and confirm password fields match
   if ($password != $confirm_password) {
        $error = "Error: Passwords do not match";
    } elseif (strlen($password) < 8) {
        $error = "Error: Password must be at least 8 characters long";
    } elseif (!preg_match("#[A-Z]+#", $password)) {
        $error = "Error: Password must contain at least one uppercase letter";
    } elseif (!preg_match("#[0-9]+#", $password)) {
        $error = "Error: Password must contain at least one number";
    } elseif (!preg_match("#\W+#", $password)) {
        $error = "Error: Password must contain at least one special character";
    } else {
        // Prepare the SQL statement
        $password = hash('sha256', $password);
        $stmt = $conn->prepare("INSERT INTO login ( email, password) VALUES (?, ?)");

        // Bind the parameters
        $stmt->bind_param("ss", $email, $password);

        // Execute the statement
        if ($stmt->execute()) {
            header('location:login_form.php');
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the connection
$conn->close();
?>












?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/clouds.css">
</head>
<body>
    <div class="image-container">
    <div class="imgslide">
                    <img src="static/image/cloud2.jpg" style="max-width:100%;height:auto;"alt="cloud" class="login-image">
                </div>
                <div class="imgslide2">
                    <img src="static/image/cloud2.jpg" style="max-width:100%;height:auto;"alt="cloud" class="login-image">
                </div>
                <div class="imgslide3">
                    <img src="static/image/cloud2.jpg" style="max-width:100%;height:auto;"alt="cloud" class="login-image">
                </div>
                <div class="imgslide4">
                    <img src="static/image/cloud2.jpg" style="max-width:100%;height:auto;"alt="cloud" class="login-image">
                </div>
                <div class="imgslide5">
                    <img src="static/image/cloud2.jpg" style="max-width:100%;height:auto;"alt="cloud" class="login-image">
                </div>
                <div class="imgslide6">
                    <img src="static/image/cloud2.jpg" style="max-width:100%;height:auto;"alt="cloud" class="login-image">
                </div>
                </div>
<div class="form-container">

   <form action="" method="post">
      <h3 class="title">register now</h3>
      
      <input type="email" name="usermail" placeholder="enter your email" class="box" required>
      <input type="password" name="password" placeholder="enter your password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm your password" class="box" required>
      <input type="submit" value="register now" class="form-btn" name="submit">
      <p>already have an account? <a href="login_form.php">login now!</a></p>
   </form>

</div>

</body>
</html>