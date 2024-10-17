<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout.css">
    <title>Checkout</title>
</head>
<body>

    <?php include 'nav/navbar.php'; ?>


    <div class="checkout-container">

        <div class="checkout-title-container">
            <h1 class="page-title">CHECKOUT</h1>
        </div>

        <div class="billing-details">
            <h2>Billing details</h2>

            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="vnaam">First Name</label>
                        <input type="text" name="voornaam" id="vnaam"/>
                    </div>
                    <div class="form-group">
                        <label for="anaam">Last Name</label>
                        <input type="text" name="achternaam" id="anaam"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bnaam">Company Name</label>
                    <input type="text" name="bedrijfsnaam" id="bnaam"/>
                </div>

                <div class="form-group">
                    <label for="land">Country / Region</label>
                    <select name="landRegio" id="land">
                        <option value="sriLanka">Sri Lanka</option>
                        <option value="nederland">Netherlands</option>
                        <option value="uk">United Kingdom</option>
                        <option value="duitsland">Germany</option>
                        <option value="frankrijk">France</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="adres">Street Address</label>
                    <input type="text" name="adres" id="adres"/>
                </div>

                <div class="form-group">
                    <label for="stad">Town / City</label>
                    <input type="text" name="stad" id="stad"/>
                </div>
                
                <div class="form-group">
                    <label for="provincie">Province</label>
                    <select name="provincie" id="provincie">
                        <option value="west">Western Province</option>
                        <option value="noord">Nothern Province</option>
                        <option value="oost">Eastern Province</option>
                        <option value="zuid">Southern Province</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="postcode">ZIP Code</label>
                    <input type="text" name="postcode" id="postcode"/>
                </div>

                <div class="form-group">
                    <label for="telNummer">Phone</label>
                    <input type="text" name="telefoonNummer" id="telNummer"/>
                </div>

                <div class="form-group extra-margin">
                    <label for="mail">Email Address</label>
                    <input type="text" name="email" id="mail"/>
                </div>

                <div class="form-group">
                    <input type="text" name="overig" id="overig" placeholder="Additional information"/>
                </div>

            </form>
        </div>

        <div class="summary">
            <table>
                <tr>
                    <td><h3>Product</h3></td>
                    <td>&nbsp;</td>
                    <td><h3>Subtotal</h3></td>
                </tr>
                <tr>
                    <td>Uni Green</td>
                    <td>X 100</td>
                    <td>€4,495</td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td>&nbsp;</td>
                    <td>€4,595</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>&nbsp;</td>
                    <td><h3 class="total-price">€4,595</h3></td>
                </tr>
            </table>
            
            <hr>

            <div class="radio-section">
                <input type="radio" name="radio" id="bank">
                <label for="bank">Direct Bank Transfer</label>

                <p class="radio-desc">
                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. 
                    Your order will not be shipped until the funds have cleared in our account.
                </p>
            
                <input type="radio" name="radio" id="afterpay">
                <label for="afterpay">After Pay</label>

                <p class="radio-desc">Only available in Europe. Place your order now, pay once you receive your order.</p>
            </div>

            <p class="final-desc">
                Your personal data will be used to support your experience throughout this website, to manage access 
                to your account, and for other purposes described in our privacy policy.
            </p>

            <a href="index.php" class="place-order-button"><b>Place order</b></a>
        </div>
</body>
</html>