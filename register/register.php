/**
 * This script handles user registration by inserting a new user into the database.
 * 
 * @param string $_POST['username'] The username entered by the user.
 * @param string $_POST['password'] The password entered by the user.
 * @return void
 */
<?php
require '../includes/config.php';
require '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = sanitize($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->close();

    header('Location: ../index.html');
    exit();
}
?>