<?php
session_start();
include 'db_connect.php'; // Ensure database connection

if (isset($_GET['payment_id'])) {
    $payment_id = $_GET['payment_id'];

    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        header("Location: marketplace.php");
        exit();
    }

    $cartItems = $_SESSION['cart'];
    $totalAmount = 0;
    $orderDetails = [];

    foreach ($cartItems as $item) {
        $totalAmount += $item['price'];
        $orderDetails[] = $item['name'] . " (₹" . $item['price'] . ")";
    }

    $orderDetailsStr = implode(", ", $orderDetails);

    $sql = "INSERT INTO orders (payment_id, total_amount, order_details) 
            VALUES ('$payment_id', '$totalAmount', '$orderDetailsStr')";

    if ($conn->query($sql) === TRUE) {
        $last_order_id = $conn->insert_id;
        $_SESSION['last_order_id'] = $last_order_id;
        $_SESSION['cart'] = []; // Clear the cart
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    header("Location: marketplace.php");
    exit();
}
