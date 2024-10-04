<?php
session_start();

// Check if the username is set in the session
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to login page if no username is found in the session
    header("Location: index.html"); // Assuming index.html is your login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Welcome</title>
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="main">
    <section class="welcome">
        <div class="container">
            <div class="welcome-content">
                <div class="welcome-form">
                    <h2 class="form-title">Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
                    <p>You've successfully verified your OTP.</p>
                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>
