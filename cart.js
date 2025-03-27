let cart = JSON.parse(localStorage.getItem("cart")) || [];

function addToCart(productName, productPrice) {
    cart.push({ name: productName, price: productPrice });
    localStorage.setItem("cart", JSON.stringify(cart));
    alert(productName + " added to cart!");

    // Redirect to checkout page
    window.location.href = "checkout.php";
}

function loadCart() {
    let storedCart = localStorage.getItem("cart");
    if (storedCart) {
        cart = JSON.parse(storedCart);
        displayCart();
    }
}

function displayCart() {
    let cartContainer = document.getElementById("cart-items");
    cartContainer.innerHTML = "";
    
    cart.forEach((item, index) => {
        cartContainer.innerHTML += `<li>${item.name} - $${item.price.toFixed(2)} 
            <button onclick="removeFromCart(${index})">Remove</button></li>`;
    });

    updateTotal();
}

function removeFromCart(index) {
    cart.splice(index, 1);
    localStorage.setItem("cart", JSON.stringify(cart));
    displayCart();
}

function updateTotal() {
    let total = cart.reduce((sum, item) => sum + item.price, 0);
    document.getElementById("total-price").innerText = "Total: $" + total.toFixed(2);
}

function proceedToPayment() {
    alert("Redirecting to payment page...");
    window.location.href = "payment.php";
}








