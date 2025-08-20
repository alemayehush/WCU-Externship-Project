<?php
require_once 'classes/user.php';

$user = new User();
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Backend validation
    if (empty($username) || empty($password)) {
        $error = "Please fill in all fields.";
    } elseif (strlen($username) < 3 || strlen($password) < 6) {
        $error = "Username must be at least 3 characters and password at least 6 characters.";
    } else {
        if ($user->login($username, $password)) {
            header("Location: index.php");
            exit;
        } else {
            $error = "Invalid username or password.";
        }
    }
}

// You can echo $error in your existing HTML form where needed
?>