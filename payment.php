<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Complete Order</title>
    <link rel="stylesheet" href="paystyle.css">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

    <header>
        <div class="logo">💳 Secure Payment</div>
        <a href="checkout.php" class="back-btn">Back to Checkout</a>
    </header>

    <section class="payment">
        <h2>Choose Your Payment Method</h2>

        <!-- Payment Form -->
        <div class="payment-box">
            <h3>Pay with Card</h3>
            <form action="process_payment.php" method="POST">
                <label for="card">Card Number:</label>
                <input type="text" id="card" name="card" required placeholder="1234 5678 9012 3456">

                <label for="expiry">Expiry Date:</label>
                <input type="month" id="expiry" name="expiry" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required placeholder="123">

                <button type="submit" class="pay-btn">Complete Payment</button>
            </form>
        </div>

        <!-- Google Pay Button with Razorpay -->
        <div class="payment-box">
            <h3>Or Pay with Google Pay</h3>
            <button id="payWithGooglePay" class="gpay-btn">Pay with Google Pay</button>
        </div>
    </section>

    <script>
        document.getElementById('payWithGooglePay').onclick = function() {
            var options = {
                "key": "YOUR_RAZORPAY_KEY_ID", // 🔹 Replace with your Razorpay Key ID
                "amount": 10000, // Amount in paise (10000 = ₹100)
                "currency": "INR",
                "name": "AgroTech",
                "description": "Payment for your order",
                "image": "https://yourwebsite.com/logo.png", // Replace with your logo URL
                "handler": function(response) {
                    alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
                    window.location.href = "process_payment.php?payment_id=" + response.razorpay_payment_id;
                },
                "prefill": {
                    "name": "Customer Name",
                    "email": "customer@example.com",
                    "contact": "9876543210"
                },
                "theme": {
                    "color": "#228B22"
                },
                "method": {
                    "upi": true,  // Enable UPI (Google Pay, PhonePe, Paytm)
                    "card": true, // Enable Card Payment
                    "netbanking": true // Enable Net Banking
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        };
    </script>

</body>
</html>
