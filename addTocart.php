<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robogoods | Cart</title>
    <link rel="icon" href="resources/roboparts.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<?php include "header.php" ?>

<header>
        <h1>Shopping Cart</h1>
    </header>
    <main>
        <section id="cart">
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="cart-items">
                    <!-- Cart items will be injected here by JavaScript -->
                </tbody>
            </table>
            <div id="cart-summary">
                <p id="cart-total">Total: $0.00</p>
                <button class="check" id="checkout-button">Proceed to Checkout</button>
            </div>
        </section>
    </main>
<script src="bootstrap.js"></script>
<script src="script.js"></script>
</body>
</html>