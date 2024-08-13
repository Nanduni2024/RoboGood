<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robogoods | Invoice</title>
    <link rel="icon" href="resources/roboparts.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="bodyInvoice">
    <div class="invoice-container">
        <header>
            <h1>Invoice</h1>
            <div class="invoice-details">
                <p><strong>Invoice #: </strong>001</p>
                <p><strong>Date: </strong>2024-08-10</p>
                <p><strong>Due Date: </strong>2024-08-20</p>
            </div>
        </header>
        <section class="billing-details">
            <h2>Billing Information</h2>
            <p><strong>Name: </strong>John Doe</p>
            <p><strong>Address: </strong>123 Main St, City, Country</p>
        </section>
        <section class="invoice-items">
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="invoice-items">
                    <tr>
                        <td>Robot Arm</td>
                        <td>2</td>
                        <td>$150.00</td>
                        <td>$300.00</td>
                    </tr>
                    <tr>
                        <td>Servo Motor</td>
                        <td>4</td>
                        <td>$50.00</td>
                        <td>$200.00</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="invoice-total">
            <h2>Total: <span id="invoice-total">$500.00</span></h2>
        </section>
        <footer>
            <button class="invoice" onclick="printInvoice()">Print Invoice</button>
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>
