<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- Koppel het externe CSS-bestand -->
    <title>Catalogue</title>
</head>
<body>

    <?php include 'nav/navbar.php'; ?>

    <div class="title-container">
        <h1 class="page-title">CATALOGUE</h1>
    </div>

    <div class="filter-bar">
        <input type="search" placeholder="Search">
        <button class="filter-button">Filter</button>
    </div>

    <div class="product-grid">
        <?php
        // Producten
        $products = [
            ["name" => "Uniform colour socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/Sunny_socks_uni_blue.jpg"],
            ["name" => "Classic strip socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/Sunny_socks_blue.jpg"],
            ["name" => "Military grade socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/military_socks.jpg"],
            ["name" => "Construction socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/construction_socks.jpg"],
            ["name" => "Oil & Gas socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/oil_gas_socks.jpg"],
        ];

        foreach ($products as $product) {
            echo '<div class="product-item">';
            echo '<img src="' . $product["image"] . '" alt="' . $product["name"] . '">';
            echo '<h3>' . $product["name"] . '</h3>';
            if (isset($product["description"])) {
                echo '<p>' . $product["description"] . '</p>';
            }
            echo '<p class="price">' . $product["price"] . '</p>';
            echo '<div class="quantity">
                    <input type="number" min="1" max="10" value="1">
                    <button class="add-to-cart">In Cart</button>
                  </div>';
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>
