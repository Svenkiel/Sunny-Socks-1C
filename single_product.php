<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalogue.css"> 
    <!-- <link rel="stylesheet" href="css/single_product.css">  -->
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

            // Star Rating
            echo '<div class="rating">';
            echo '<span>★★★★★</span> <span>5 Customer Reviews</span>';
            echo '</div>';

            echo '<p class="description">' . $product["description"] . '</p>';

            // Toon kleur- en maatopties
            echo '<div class="product-options">';
            echo '<div class="size-options"><label>Size:</label>';
            foreach ($product["sizes"] as $size) {
                echo '<button>' . $size . '</button>';
            }
            echo '</div>';
            echo '<div class="color-options"><label>Color:</label>';
            foreach ($product["colors"] as $colorOption) {
                echo '<button class="color-button" style="background-color: ' . $colorOption['color'] . ';" data-image="' . $colorOption['image'] . '"></button>';
            }
            echo '</div>';
            echo '</div>';

            // Voeg winkelwagen knop toe
            echo '<div class="add-to-cart">';
            echo '<div class="quantity"><label>Quantity:</label><input type="number" value="1" min="1"></div>';
            echo '<button class="add-button">Add to cart</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            // Tabs for Description, Additional Information, and Reviews
            echo '<div class="tabs">';
            echo '<button class="tablinks active" onclick="openTab(event, \'Description\')">Description</button>';
            echo '<button class="tablinks" onclick="openTab(event, \'AdditionalInformation\')">Additional Information</button>';
            echo '<button class="tablinks" onclick="openTab(event, \'Reviews\')">Reviews</button>';
            echo '</div>';

            echo '<div id="Description" class="tabcontent">';
            echo '<div class="detailed-description">';
            echo '<p>Step into comfort and style with our premium ' . strtolower($product["name"]) . '. Crafted from high-quality organic cotton, these socks offer both durability and a soft feel against your skin. Available in a vibrant array of solid colors, they\'re perfect for adding a pop of personality to any outfit.</p>';
            echo '<h3>Key features:</h3>';
            echo '<ul>';
            echo '<li>Made from high-quality organic cotton</li>';
            echo '<li>Available in multiple solid colors</li>';
            echo '<li>Sizes: ' . implode(', ', $product["sizes"]) . ' to ensure the perfect fit</li>';
            echo '<li>Versatile for casual or formal wear</li>';
            echo '<li>Priced at ' . $product["price"] . ' per pair</li>';
            echo '</ul>';
            echo '<p>Whether you\'re dressing up for work or keeping it casual on the weekend, these socks provide the perfect finishing touch. Their uniform color design makes them ideal for pairing with any ensemble. With a 5-star rating from our satisfied customers, you can trust in the quality and comfort of these essential wardrobe staples.</p>';
            echo '<p>Add a splash of color to your sock drawer today! Simply select your preferred size and color, choose the quantity, and click "Add to cart" to make these fantastic socks yours.</p>';
            echo '</div>';
            echo '</div>';

            echo '<div id="AdditionalInformation" class="tabcontent" style="display:none;">';
            echo '<p>More product details here.</p>';
            echo '</div>';

            echo '<div id="Reviews" class="tabcontent" style="display:none;">';
            echo '<p>5 Customer Reviews</p>';
            echo '</div>';

        } else {
            echo '<p>Product not found.</p>';
        }
        ?>
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

        // Tabs switcher
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

</body>
</html>
