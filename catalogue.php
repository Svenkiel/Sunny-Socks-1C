<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Catalogue</title>
</head>
<body>

    <?php include 'nav/navbar.php'; ?>

    <div class="product-grid">
        <?php
        // Producten
        $products = [
            ["name" => "Uniform colour socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/Sunny_socks_uni_blue.jpg"],
            ["name" => "Classic strip socks", "description" => "Available in multiple colours, made from high quality organic cotton", "price" => "€10", "image" => "img/Sunny_socks_blue.jpg"],
        ];

        foreach ($products as $product) {
            echo '<div class="product-item">';
            echo '<img src="' . $product["image"] . '" alt="' . $product["name"] . '">';
            echo '<h3>' . $product["name"] . '</h3>';
            if (isset($product["description"])) {
                echo '<p>' . $product["description"] . '</p>';
            }
            echo '<p class="price">' . $product["price"] . '</p>';
            echo '</div>';
        }
        ?>
    </div>

    <style>

    .product-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, auto);
        gap: 20px;
        padding: 40px;
        width: 50%;
        margin: 0 auto; 
    }

    .product-item {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
    }

    .product-item:hover {
        transform: scale(1.05);
    }

    .product-item img {
        max-width: 100%;
        height: auto;
        margin-bottom: 15px;
    }

    .product-item h3 {
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    .product-item p {
        margin: 10px 0;
        color: #555;
    }

    .product-item .price {
        font-weight: bold;
        color: #e67e22;
    }
    </style>

</body>
</html>
