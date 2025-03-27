<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Complete Your Purchase</title>
    <link rel="stylesheet" href="cartstyle.css">
</head>
<body>

    <header>
        <div class="logo">🛒 Checkout</div>
        <a href="marketplace.php" class="back-btn">Back to Marketplace</a>
    </header>

    <section class="cart">
        <h2>Your Cart</h2>
        <ul id="cart-items"></ul>
        <h3 id="total-price">Total: ₹0.00</h3>
        <button onclick="proceedToPayment()">Proceed to Payment</button>
    </section>

    <script src="cart.js"></script>
    <script>
        loadCart();

        function proceedToPayment() {
            alert("Redirecting to payment page...");
            window.location.href = "payment.php";
        }
    </script>

</body>
</html>
