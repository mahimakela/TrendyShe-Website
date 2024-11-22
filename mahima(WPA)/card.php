<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
      body {
    background-image: url('cardback.png');
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Arial', sans-serif;
    padding: 20px;
    color: #333;
    margin: 0;
}

h1 {
    text-align: center;
    color: #333;
    font-size: 2rem; /* Reduced font size for a cleaner look */
    margin-bottom: 1.5rem; /* Adjusted for tighter spacing */
}

.cart-container {
    max-width: 600px; /* Reduced max width for a more compact design */
    margin: 0 auto;
    background-color: rgba(255, 255, 255, 0.95);
    padding: 2rem; /* Maintained padding for consistency */
    border-radius: 0.75rem; /* Slightly smaller border radius */
    box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

.cart-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0; /* Reduced padding for a more compact item */
    border-bottom: 1px solid #e0e0e0;
}

.cart-item:last-child {
    border-bottom: none; /* No border on last item */
}

.cart-item h2 {
    font-size: 1.25rem; /* Smaller font for item name */
    color: #444;
    margin: 0;
    flex: 3;
}

.cart-item p {
    font-size: 1rem; /* Smaller font for price */
    color: #666;
    margin: 0;
    flex: 1;
    text-align: right;
}

.cart-item button {
    background-color: #ff4c4c;
    color: white;
    border: none;
    padding: 0.5rem 0.75rem; /* Smaller button size */
    border-radius: 0.5rem; /* Slightly rounded corners */
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 0.9rem; /* Smaller button font */
}

.cart-item button:hover {
    background-color: #ff0000; /* Maintained hover color */
}

.total {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.25rem; /* Reduced size for cleaner look */
    color: #333;
    margin-top: 2rem; /* Adjusted spacing above total */
    border-top: 2px solid #e0e0e0;
    padding-top: 1rem;
}

.no-items {
    text-align: center;
    color: #777;
    font-size: 1.25rem; /* Adjusted for better balance */
    padding: 2rem; /* Reduced padding for a more compact display */
}

/* Responsive Design */
@media (max-width: 768px) {
    .cart-container {
        padding: 1.5rem; /* Adjust padding for smaller screens */
    }
    .cart-item h2 {
        font-size: 1.1rem; /* Smaller headings for mobile */
    }
    .cart-item p {
        font-size: 0.9rem; /* Smaller price font for mobile */
    }
    .cart-item button {
        padding: 0.4rem 0.6rem; /* Adjust button size */
        font-size: 0.8rem; /* Maintain button font size */
    }
    .total {
        font-size: 1.1rem; /* Responsive total font size */
    }
}


    </style>
</head>
<body>

    
<h1>Your Cart</h1>

<div class="cart-container">
    <div class="cart-products"></div>
    
    <!-- Total Price Display -->
    <div class="total">
        <span>Total Cart Amount:</span>
        <span class="total-amount">$0</span>
    </div>
</div>


<script>
    // Check if cart exists in local storage, otherwise initialize an empty array
    let cart3 = JSON.parse(localStorage.getItem('cart2')) || [];

    // Function to render the cart items
    function renderCart() {
        const cartProducts = document.querySelector('.cart-products');
        const totalAmountElement = document.querySelector('.total-amount');
        
        // Clear current cart display
        cartProducts.innerHTML = '';
        
        // Initialize total price
        let totalPrice = 0;

        if (cart3.length === 0) {
            cartProducts.innerHTML = '<div class="no-items">Your cart is empty</div>';
        } else {
            // Loop through cart items and display them
            cart3.forEach((el, index) => {
                const cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');

                // Item name
                const itemName = document.createElement('h2');
                itemName.textContent = el.name;
                cartItem.appendChild(itemName);

                // Price per unit
                const itemPrice = document.createElement('p');
                itemPrice.textContent = '$' + el.price.toFixed(2);
                cartItem.appendChild(itemPrice);

                // Remove button
                const removeBtn = document.createElement('button');
                removeBtn.textContent = 'Remove';
                removeBtn.addEventListener('click', () => {
                    removeFromCart(index); // Call function to remove item
                });
                cartItem.appendChild(removeBtn);

                // Append to cart container
                cartProducts.appendChild(cartItem);

                // Update total price based on quantity
                totalPrice += el.price;
            });
        }
        // Display total amount
        totalAmountElement.textContent = '$' + totalPrice.toFixed(2);
    }

    // Function to remove an item from the cart
    function removeFromCart(index) {
        cart3.splice(index, 1); // Remove item from array
        localStorage.setItem('cart2', JSON.stringify(cart3)); // Update local storage
        renderCart(); // Re-render the cart
    }

    // Initial render
    renderCart();
</script>

<?php
// Database connection details
$host = "localhost";
$user = "mahimakela";
$pass = "ma@2815@2815";
$db = "login";

// Create a database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Insert query
    $sql = "INSERT INTO card (name, price) VALUES ('$product_name', '$product_price')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "Product added to cart successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

</body>
</html>