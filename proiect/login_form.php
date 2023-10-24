<?php
session_start();
$servername = "localhost"; // Change this to your MySQL server name
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "login"; // Change this to your MySQL database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connectionCopy code
if (isset($_POST['submit'])) {
    $email = $_POST['usermail'];
    $password = $_POST['password'];
    $password = hash('sha256', $password);
    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM login WHERE email=? AND password=?");

    // Bind the parameters
    $stmt->bind_param("ss", $email, $password);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        // User exists, set session variable and redirect
        $_SESSION['usermail'] = $email;
        header('location:index.php');
    } else {
        // User doesn't exist, set error message
        $error[] = 'Incorrect email or password.';
    }

    // Close the statement
    $stmt->close();
}
$conn->close();
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
        <h3 class="title">login now</h3>
        <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
        <input type="email" name="usermail" placeholder="enter your email" class="box" required>
        <input type="password" name="password" placeholder="enter your password" class="box" required>
        <input type="submit" value="login now" class="form-btn" name="submit">
        <p>don't have an account? <a href="register_form.php">register now!</a></p>
    </form>

</div>

</body>
</html>