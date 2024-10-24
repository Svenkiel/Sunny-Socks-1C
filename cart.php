<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css"> 
    <title>Cart</title>
</head>
<body>

    <?php include 'nav/navbar.php'; ?>


    <div class="cart-container">

        <div class="cart-title-container">
            <h1 class="page-title">CART</h1>
        </div>

        <div class="cart-table">
            <table>
                    <tr class="upper-row">
                        <td class="first-cell"></td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                        <td class="last-cell"></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/catalogus_sokken_stripes_green.png" alt="product" width="50" height="105">
                        </td>
                        <td>Stripes Green</td>
                        <td>€13.00</td>
                        <td>
                            <input type="text" name="quantity-1" id="quantity-1" value="100" onchange="calcSubtotal(this)">
                        </td>
                        <td class="subtotal">€1300.00</td>
                        <td>
                            <a class="remove-button" onclick="removeProduct(this)">
                                <img src="img/nav/bin.svg" alt="remove">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/catalogus_sokken_stripes_blue.png" alt="product" width="50" height="105">
                        </td>
                        <td>Stripes Blue</td>
                        <td>€13.00</td>
                        <td>
                            <input type="text" name="quantity-2" id="quantity-2" value="75" onchange="calcSubtotal(this)">
                        </td>
                        <td class="subtotal">€975.00</td>
                        <td>
                            <a class="remove-button" onclick="removeProduct(this)">
                                <img src="img/nav/bin.svg" alt="remove">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/catalogus_sokken_uni_blue.png" alt="product" width="50" height="105">
                        </td>
                        <td>Uni Socks Blue</td>
                        <td>€10.00</td>
                        <td>
                            <input type="text" name="quantity-3" id="quantity-3" value="50" onchange="calcSubtotal(this)">
                        </td>
                        <td class="subtotal">€500.00</td>
                        <td>
                            <a class="remove-button" onclick="removeProduct(this)">
                                <img src="img/nav/bin.svg" alt="remove">
                            </a>
                        </td>
                    </tr>
                </table>
        </div>

        <div class="cart-totals">
            <h2>Cart Totals</h2>

            <table class="totals">
                <tr>
                    <td>Subtotal</td>
                    <td class="total">€2775.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td class="total"><h3>€2775.00</h3></td>
                </tr>
            </table>

            <a href="checkout.php" class="checkout-button"><b>Check Out</b></a>
        </div>
    </div>
    <script>
        function removeProduct(element) {
            alert("Product removed from cart");
            const row = element.closest('tr');
            row.remove();

            calcTotal();
        }
        
        function calcSubtotal(input) {
            const row = input.closest('tr');
            const priceCell = row.cells[2];
            const price = parseFloat(priceCell.textContent.replace('€', ''));
            const quantity = parseInt(input.value);
            const subtotal = price * quantity;
            const subtotalCell = row.querySelector('.subtotal');
            subtotalCell.textContent = `€${subtotal.toFixed(2)}`;
            
            calcTotal();
        }

        function calcTotal() {
            const subtotals = document.querySelectorAll('.subtotal');
            let total = 0;

            subtotals.forEach(subtotalCell => {
                const subtotalText = subtotalCell.textContent.replace('€', '');
                total += parseFloat(subtotalText);
            });

            const totalCells = document.querySelectorAll('.total');
            totalCells.forEach(totalCell => {
            totalCell.textContent = `€${total.toFixed(2)}`;
            });
        }
    </script>
</body>

<?php include 'nav/footer.php'; ?>

</html>