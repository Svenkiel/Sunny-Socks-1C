<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalogue.css"> 
    <title>Catalogue</title>
</head>
<body>

    <?php include 'nav/navbar.php'; ?>

    <div class="title-container">
        <h1 class="page-title">CATALOGUE</h1>
    </div>
    <div class="filter-bar">
        <form method="GET" action="catalogue.php">
            <input type="search" name="search" placeholder="Search" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button type="submit" class="filter-button">Search</button>
            <a href="catalogue.php" class="show-all-button">Show All</a>
        </form>
    </div>

    <div class="product-grid">
        <?php
        // Producten array
        $products = [
            1 => ["name" => "Uniform colour socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/Sunny_socks_uni_blue.jpg"],
            2 => ["name" => "Classic striped socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/Sunny_socks_blue.jpg"],
            3 => ["name" => "Military grade socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/military_socks.jpg"],
            4 => ["name" => "Construction socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/construction_socks.jpg"],
            5 => ["name" => "Oil & Gas socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/oil_gas_socks.jpg"],
        ];

        // Check of er een zoekterm is ingevoerd
        $searchTerm = isset($_GET['search']) ? trim($_GET['search']) : '';

        // Filter de producten op basis van de zoekterm
        $filteredProducts = array_filter($products, function($product) use ($searchTerm) {
            return stripos($product['name'], $searchTerm) !== false || stripos($product['description'], $searchTerm) !== false;
        });

        // Als er een zoekterm is gebruikt en er gefilterde producten zijn, toon ze
        if ($searchTerm && !empty($filteredProducts)) {
            foreach ($filteredProducts as $id => $product) {
                echo '<div class="product-item">';
                echo '<a href="single_product.php?id=' . $id . '"><img src="' . $product["image"] . '" alt="' . $product["name"] . '"></a>';
                echo '<h3>' . $product["name"] . '</h3>';
                if (isset($product["description"])) {
                    echo '<p>' . $product["description"] . '</p>';
                }
                echo '<p class="price">' . $product["price"] . '</p>';
                echo '<button class="add-to-cart">Add to cart</button>';
                echo '</div>';
            }
        } elseif ($searchTerm && empty($filteredProducts)) {
            // Als er geen producten zijn die overeenkomen met de zoekterm
            echo '<p>No products found matching your search.</p>';
        } else {
            // Als er geen zoekterm is ingevoerd, toon alle producten
            foreach ($products as $id => $product) {
                echo '<div class="product-item">';
                echo '<a href="single_product.php?id=' . $id . '"><img src="' . $product["image"] . '" alt="' . $product["name"] . '"></a>';
                echo '<h3>' . $product["name"] . '</h3>';
                if (isset($product["description"])) {
                    echo '<p>' . $product["description"] . '</p>';
                }
                echo '<p class="price">' . $product["price"] . '</p>';
                echo '<button class="add-to-cart">Add to cart</button>';
                echo '</div>';
            }
        }
        ?>
    </div>

</body>
</html>
