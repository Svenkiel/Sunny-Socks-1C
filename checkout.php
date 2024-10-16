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

            <form>
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
</body>
</html>