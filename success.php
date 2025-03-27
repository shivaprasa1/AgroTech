<?php
session_start();
include 'db_connect.php'; // Ensure the database connection is included

// Check if a payment was made
if (!isset($_SESSION['last_order_id'])) {
    // Redirect to homepage if accessed directly
    header("Location: marketplace.php");
    exit();
}

$order_id = $_SESSION['last_order_id'];
unset($_SESSION['last_order_id']); // Remove session variable to prevent reloading issue

// Retrieve order details from database
$sql = "SELECT * FROM orders WHERE id = '$order_id' LIMIT 1";
$result = $conn->query($sql);
$order = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <link rel="stylesheet" href="paystyle.css">
</head>
<body>

    <header>
        <div class="logo">🎉 Order Confirmed</div>
        <a href="marketplace.php" class="back-btn">Back to Marketplace</a>
    </header>

    <section class="success">
        <h2>Thank You for Your Purchase!</h2>
        <p>Your payment was successful. Your order has been placed.</p>
        <h3>Order Summary</h3>
        <p><strong>Order ID:</strong> <?php echo $order['id']; ?></p>
        <p><strong>Total Amount:</strong> ₹<?php echo $order['total_amount']; ?></p>
        <p><strong>Payment ID:</strong> <?php echo $order['payment_id']; ?></p>
        <a href="marketplace.php" class="btn">Continue Shopping</a>
    </section>

</body>
</html>
