<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalogue.css"> 
    <link rel="stylesheet" href="css/single_product.css"> 
    <title>Product Details</title>
</head>
<body>

    <?php include 'nav/navbar.php'; ?>

    <div class="product-container">
        <?php
        // Producten array met afbeeldingen gekoppeld aan kleuren
        $products = [
            1 => [
                "name" => "Uniform colour socks", 
                "description" => "Available in multiple colours, made from high quality organic cotton", 
                "price" => "€10", 
                "image" => "img/Sunny_socks_uni_blue.jpg", 
                "sizes" => ["S", "M", "L"], 
                "colors" => [
                    ["color" => "blue", "image" => "img/Sunny_socks_uni_blue.jpg"],  
                    ["color" => "red", "image" => "img/Sunny_socks_uni_red.jpg"],    
                    ["color" => "turquoise", "image" => "img/Sunny_socks_uni_green.jpg"],
                    ["color" => "pink", "image" => "img/Sunny_socks_uni_pink.jpg"],   
                    ["color" => "gold", "image" => "img/Sunny_socks_uni_yellow.jpg"]
                ]
            ],
            2 => [
                "name" => "Classic strip socks", 
                "description" => "Available in multiple colours, made from high quality organic cotton", 
                "price" => "€10", 
                "image" => "img/Sunny_socks_blue.jpg", 
                "sizes" => ["S", "M", "L"], 
                "colors" => [
                    ["color" => "blue", "image" => "img/Sunny_socks_blue.jpg"],  
                    ["color" => "red", "image" => "img/Sunny_socks_red.jpg"],    
                    ["color" => "turquoise", "image" => "img/Sunny_socks_green.jpg"],
                    ["color" => "pink", "image" => "img/Sunny_socks_pink_01.jpg"],   
                    ["color" => "gold", "image" => "img/Sunny_socks_yellow.jpg"]
                ]
            ],
            3 => [
                "name" => "Military grade socks", 
                "description" => "Available in black only, made from high quality organic cotton", 
                "price" => "€10", 
                "image" => "img/military_socks.jpg", 
                "sizes" => ["S", "M", "L"], 
                "colors" => [
                    ["color" => "black", "image" => "img/military_socks.jpg"],  
                ]
            ],
            4 => [
                "name" => "Construction socks", 
                "description" => "Available in black only, made from high quality organic cotton", 
                "price" => "€10", 
                "image" => "img/construction_socks.jpg", 
                "sizes" => ["S", "M", "L"], 
                "colors" => [
                    ["color" => "black", "image" => "img/construction_socks.jpg"],  
                ]
            ],
            5 => [
                "name" => "Oil & Gas socks", 
                "description" => "Available in black only, made from high quality organic cotton", 
                "price" => "€10", 
                "image" => "img/oil_gas_socks.jpg", 
                "sizes" => ["S", "M", "L"], 
                "colors" => [
                    ["color" => "black", "image" => "img/oil_gas_socks.jpg"],  
                ]
            ],
        ];

        // Haal het product-ID op uit de URL
        $productId = isset($_GET['id']) ? intval($_GET['id']) : 0;

        // Controleer of het product-ID geldig is
        if (array_key_exists($productId, $products)) {
            $product = $products[$productId];

            // Toon productdetails
            echo '<div class="product-detail">';
            echo '<div class="product-image"><img id="product-image" src="' . $product["image"] . '" alt="' . $product["name"] . '"></div>';
            echo '<div class="product-info">';
            echo '<h1>' . $product["name"] . '</h1>';
            echo '<p class="price">' . $product["price"] . '</p>';
            echo '<p class="description">' . $product["description"] . '</p>';

            // Toon kleur- en maatopties
            echo '<div class="product-options">';
            echo '<div class="size-options"><label>Maat:</label>';
            foreach ($product["sizes"] as $size) {
                echo '<button>' . $size . '</button>';
            }
            echo '</div>';
            echo '<div class="color-options"><label>Kleur:</label>';
            foreach ($product["colors"] as $colorOption) {
                echo '<button class="color-button" style="background-color: ' . $colorOption['color'] . ';" data-image="' . $colorOption['image'] . '"></button>';
            }
            echo '</div>';
            echo '</div>';

            // Voeg winkelwagen knop toe
            echo '<div class="add-to-cart">';
            echo '<div class="quantity"><label>Aantal:</label><input type="number" value="1" min="1"></div>';
            echo '<button class="add-button">Voeg toe aan winkelwagen</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<p>Product niet gevonden.</p>';
        }
        ?>
    </div>

    <script>
        // JavaScript om de afbeelding te wijzigen op basis van de kleurkeuze
        document.querySelectorAll('.color-button').forEach(button => {
            button.addEventListener('click', function() {
                // Haal de nieuwe afbeelding op uit het data-attribute van de knop
                const newImage = this.getAttribute('data-image');
                // Verander de productafbeelding
                document.getElementById('product-image').src = newImage;
            });
        });
    </script>

</body>
</html>
