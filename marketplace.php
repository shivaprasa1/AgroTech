<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - Buy Agricultural Products</title>
    <link rel="stylesheet" href="stylesm.css">
</head>
<body>
    <!-- Header -->
    <header style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; background-color: #228B22; color: #ffffff;">
        <div class="logo" style="font-size: 1.5rem; font-weight: bold;">🌱 AgroTech</div>
        <nav>
            <ul style="display: flex; list-style: none; margin: 0; padding: 0; gap: 15px;">
            <div style="display: flex; gap: 15px; align-items: center;">
                <li><a href="/login/indexx.php" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Home</a></li>
                <li><a href="#marketplace" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Marketplace</a></li>
                <li><a href="/login/indexx.php#d" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Disease Detection</a></li>
                <li><a href="/login/resources.html" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Resources</a></li>
                <li><a href="/login/weather.html" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Weather</a></li>
            </div>
            <div style="display: flex; align-items: center; gap: 15px;">
            <div id="google_translate_element"></div>

            <li><a href="/login/logout.php" style="text-decoration: none; color: #ffffff; background-color: #ff0000; padding: 10px 15px; border-radius: 5.8px; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#cc0000'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor='#ff0000'; this.style.color='#ffffff';">Logout</a></li>
            </ul>
        </nav>
        

    </header>
    <!-- Marketplace Section -->
    <section class="marketplace">
        <h2 style="text-align: center;">Buy, Rent, or Sell Agricultural Products</h2>

        <!-- Search and Filter -->
        <div style="text-align: center; margin-bottom: 20px;">
            <input type="text" id="searchBar" placeholder="Search products..." onkeyup="filterProducts()" style="padding: 10px; width: 300px;">
            <select id="filterDropdown" onchange="filterProducts()" style="padding: 10px;">
                <option value="all">All</option>
                <option value="buy">Buy</option>
                <option value="rent">Rent</option>
                <option value="sell">Sell</option>
                <option value="tools">Tools (Rent)</option>
            </select>
        </div>

        <div class="product-container" style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 20px;">
            <?php
            // Example product data with daily rate changes
            $products = [
                ["name" => "Organic Wheat Seeds", "base_price" => 1999, "rent_price" => 199, "sell_price" => 1800, "location" => "Delhi", "image" => "/login/wheat.jpg", "type" => "buy"],
                ["name" => "Premium Rice Seeds", "base_price" => 1599, "rent_price" => 159, "sell_price" => 1500, "location" => "Mumbai", "image" => "/login/rice.jpg", "type" => "buy"],
                ["name" => "Tractor", "rent_price" => 5000, "location" => "Delhi", "image" => "/login/Tractor.png", "type" => "tools"],
                ["name" => "Corn Seeds", "base_price" => 1299, "rent_price" => 129, "sell_price" => 1200, "location" => "Chennai", "image" => "/login/corn.jpg", "type" => "buy"],
                ["name" => "Soybean Seeds", "base_price" => 1499, "rent_price" => 149, "sell_price" => 1400, "location" => "Pune", "image" => "/login/Soybean%20Seeds.jpg", "type" => "buy"],
                ["name" => "Plough", "rent_price" => 300, "location" => "Mumbai", "image" => "/login/Plough.jpg", "type" => "tools"],
            ];

            foreach ($products as $product) {
                if (isset($product['base_price'])) {
                    // Simulate daily rate change (e.g., +/- 5%)
                    $rateChange = rand(-5, 5) / 100;
                    $currentPrice = $product["base_price"] + ($product["base_price"] * $rateChange);
                    $rateChangeText = $rateChange >= 0 ? "↑" : "↓";
                    $rateChangeColor = $rateChange >= 0 ? "green" : "red";
                }
            ?>
            <div class="product" style="flex: 1; min-width: 300px;" data-name="<?php echo strtolower($product['name']); ?>" data-type="<?php echo $product['type']; ?>">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <p><?php echo $product['name']; ?></p>
                <?php if ($product['type'] === 'buy' || $product['type'] === 'sell') { ?>
                    <span>₹<?php echo number_format($currentPrice, 2); ?> 
                        <span style="color: <?php echo $rateChangeColor; ?>;">
                            (<?php echo $rateChangeText . abs($rateChange * 100); ?>%)
                        </span>
                    </span>
                    <input type="number" id="<?php echo strtolower(str_replace(' ', '', $product['name'])); ?>Qty" placeholder="Quantity (kg)" min="1" style="width: 100px;">
                    <button onclick="addToCart('<?php echo $product['name']; ?>', <?php echo $currentPrice; ?>, document.getElementById('<?php echo strtolower(str_replace(' ', '', $product['name'])); ?>Qty').value)">Add to Cart</button>
                <?php } elseif ($product['type'] === 'tools') { ?>
                    <span>₹<?php echo number_format($product['rent_price'], 2); ?> / day</span>
                    <input type="number" id="<?php echo strtolower(str_replace(' ', '', $product['name'])); ?>RentDays" placeholder="Days" min="1" style="width: 100px;">
                    <button onclick="addToCart('<?php echo $product['name']; ?> (Rental)', <?php echo $product['rent_price']; ?>, document.getElementById('<?php echo strtolower(str_replace(' ', '', $product['name'])); ?>RentDays').value)">Add to Cart</button>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </section>

    <script>
        function addToCart(productName, price, quantity) {
            if (!quantity || quantity <= 0) {
                alert("Please enter a valid quantity or days for " + productName);
                return;
            }
            const totalPrice = price * quantity;
            alert(quantity + " of " + productName + " has been added to your cart for ₹" + totalPrice.toFixed(2));
            // Add your cart logic here
        }

        function filterProducts() {
            const searchQuery = document.getElementById('searchBar').value.toLowerCase();
            const filterType = document.getElementById('filterDropdown').value;
            const products = document.querySelectorAll('.product');

            products.forEach(product => {
                const productName = product.getAttribute('data-name');
                const productType = product.getAttribute('data-type');

                if ((productName.includes(searchQuery) || searchQuery === '') &&
                    (filterType === 'all' || filterType === productType)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }
    </script>





    <!-- JavaScript for Cart -->
    <script src="cart.js"></script>

    <!-- Google Translate Script -->
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
