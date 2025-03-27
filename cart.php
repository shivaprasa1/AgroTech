<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <header>
        <div class="logo">🛒 My Cart</div>
        <a href="marketplace.php" class="back-btn">Back to Marketplace</a>
    </header>

    <section class="cart">
        <h2>Your Cart</h2>
        <ul id="cart-items"></ul>
    </section>

    <script src="js/cart.js"></script>
    <script>loadCart();</script>

</body>
</html>
