<?php
session_start();
include("connect.php");

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // Redirect to indexx.php
    header("Location: indexx.php");
    exit(); // Ensure no further code is executed
} else {
    // If not logged in, redirect to the login page or show an error
    header("Location: login.php");
    exit();
}
?>
