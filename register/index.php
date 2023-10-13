/**
 * FILEPATH: /c:/Users/olapu/stuff/php-julisa/santiago/register/index.php
 * 
 * This file contains a registration form for users to sign up. It requires the config.php file to be included.
 * The form includes fields for username and password, and a submit button to register the user.
 * The form is styled using Bootstrap and includes a background gradient.
 */
<?php require '../includes/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form action="./register.php" method="post" class="p-5 bg-light shadow-lg rounded-lg">
            <h1 class="text-center mb-4">Register Form</h1>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Register</button>
        </form>
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>
// BEGIN: bg-gradient
<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom right, #ceff00, #00f6ff);
        }
    </style>
</head>
// END: bg-gradient
</html>