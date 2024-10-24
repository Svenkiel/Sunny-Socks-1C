<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalogue.css">
    <link rel="stylesheet" href="css/footer.css" type>
    <title>Product Details</title>
</head>
<body>
    <?php include 'nav/navbar.php'; ?>

    <div class="product-container">
        <?php
        // Products array with images linked to colors
        $products = [
            1 => [
                "name" => "Uniform colour socks",
                "description" => "Available in multiple colours, made from high quality organic cotton",
                "price" => "€10.00",
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
                "price" => "€13.00",
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
                "price" => "€22.00",
                "image" => "img/military_socks.jpg",
                "sizes" => ["S", "M", "L"],
                "colors" => [
                    ["color" => "black", "image" => "img/military_socks.jpg"]
                ]
            ],
            4 => [
                "name" => "Construction socks",
                "description" => "Available in black only, made from high quality organic cotton",
                "price" => "€20.00",
                "image" => "img/construction_socks.jpg",
                "sizes" => ["S", "M", "L"],
                "colors" => [
                    ["color" => "black", "image" => "img/construction_socks.jpg"]
                ]
            ],
            5 => [
                "name" => "Oil & Gas socks",
                "description" => "Available in black only, made from high quality organic cotton",
                "price" => "€20.00",
                "image" => "img/oil_gas_socks.jpg",
                "sizes" => ["S", "M", "L"],
                "colors" => [
                    ["color" => "black", "image" => "img/oil_gas_socks.jpg"]
                ]
            ]
        ];

        // Get product ID from URL
        $productId = isset($_GET['id']) ? intval($_GET['id']) : 0;

        // Check if product ID is valid
        if (array_key_exists($productId, $products)) {
            $product = $products[$productId];
            
            // Define reviews for each product
            $reviews = getProductReviews($productId);
            $reviewCount = count($reviews);

            renderProductDetails($product, $reviewCount);
            renderProductTabs($product, $reviews, $reviewCount);
        } else {
            echo '<p>Product not found.</p>';
        }

        /**
         * Get reviews for a specific product
         */
        function getProductReviews($productId) {
            $reviews = [
                1 => [
                    "Sarah T., Operations Manager (Oil & Gas Industry, USA): 'Sunny Socks has been an absolute game-changer for our team working in extreme conditions. The durability and warmth of their socks are unmatched. Highly recommended!'",
                    "Emily P., Fleet Manager (Logistics, Canada): 'We outfitted our entire logistics team with Sunny Socks, and the difference has been noticeable. Their feet stay warm during cold deliveries, and the socks have a great fit for long hours.'"
                ],
                2 => [
                    "Liam W., Procurement Specialist (Construction Company, UK): 'We've been using Sunny Socks for our entire crew, and the feedback has been fantastic. The socks are tough, comfortable, and perfect for long days on construction sites.'",
                    "Javier G., Supply Chain Director (Construction Industry, Mexico): 'Sunny Socks are the best socks we've used for our construction teams. They're tough, durable, and provide great support. From the ease of ordering to the quick delivery, the whole process was seamless.'"
                ],
                3 => [
                    "Natalie R., Logistics Coordinator (Military Supplier, Germany): 'We've sourced socks for our military clients from various suppliers, but Sunny Socks stands out for their reliability and quality. The military edition socks are built to last.'",
                    "Anton M., Procurement Manager (Engineering Firm, Russia): 'Finding socks that are both warm and durable for our engineering teams was a challenge until we discovered Sunny Socks. They provide comfort and resilience, even in sub-zero conditions.'"
                ],
                4 => [
                    "Liam W., Procurement Specialist (Construction Company, UK): 'We've been using Sunny Socks for our entire crew, and the feedback has been fantastic. The socks are tough, comfortable, and perfect for long days on construction sites.'",
                    "Javier G., Supply Chain Director (Construction Industry, Mexico): 'Sunny Socks are the best socks we've used for our construction teams. They're tough, durable, and provide great support. From the ease of ordering to the quick delivery, the whole process was seamless.'"
                ],
                5 => [
                    "Sarah T., Operations Manager (Oil & Gas Industry, USA): 'Sunny Socks has been an absolute game-changer for our team working in extreme conditions. The durability and warmth of their socks are unmatched. Highly recommended!'",
                    "Carlos D., Safety Officer (Oil Field Services, Brazil): 'Our team works in some of the harshest environments, en Sunny Socks heeft een merkbare verschil gemaakt in hun comfort. Deze sokken houden goed stand tegen slijtage.'",
                    "Ahmed K., Operations Supervisor (Oil & Gas, UAE): 'Our field workers are exposed to harsh conditions, and Sunny Socks has made a noticeable difference in their comfort. Deze sokken zijn heavy-duty maar ademend, perfect voor hete en koude omgevingen.'"
                ]
            ];
            
            return isset($reviews[$productId]) ? $reviews[$productId] : [];
        }

        /**
         * Render product details section
         */
        function renderProductDetails($product, $reviewCount) {
            echo '<div class="product-detail">';
            echo '<div class="product-image">';
            echo '<img id="product-image" src="' . $product["image"] . '" alt="' . $product["name"] . '">';
            echo '</div>';
            
            echo '<div class="product-info">';
            echo '<h1>' . $product["name"] . '</h1>';
            echo '<p class="price">' . $product["price"] . '</p>';
            
            // Star Rating
            echo '<div class="rating">';
            echo '<span>★★★★★</span> <span>' . $reviewCount . ' Customer Reviews</span>';
            echo '</div>';
            
            echo '<p class="description">' . $product["description"] . '</p>';
            
            // Size and Color Options
            renderProductOptions($product);
            
            // Add to Cart Section
            echo '<div class="add-to-cart">';
            echo '<div class="quantity">';
            echo '<label>Quantity:</label>';
            echo '<input type="number" id="quantity" value="1" min="1">';
            echo '</div>';
            echo '<button class="add-button" id="add-to-cart-button">Add to cart</button>';
            echo '</div>';
            
            echo '</div>';
            echo '</div>';
        }

        /**
         * Render product options (sizes and colors)
         */
        function renderProductOptions($product) {
            echo '<div class="product-options">';
            
            // Size Options
            echo '<div class="size-options">';
            echo '<label>Size:</label>';
            foreach ($product["sizes"] as $size) {
                $activeClass = ($size === 'M') ? ' active' : '';
                echo '<button class="size-button' . $activeClass . '">' . $size . '</button>';
            }
            echo '</div>';
            
            // Color Options
            echo '<div class="color-options">';
            echo '<label>Color:</label>';
            foreach ($product["colors"] as $colorOption) {
                echo '<button class="color-button" style="background-color: ' . $colorOption['color'] . ';" ';
                echo 'data-image="' . $colorOption['image'] . '"></button>';
            }
            echo '</div>';
            
            echo '</div>';
        }

        /**
         * Render product tabs section
         */
        function renderProductTabs($product, $reviews, $reviewCount) {
            // Tab Buttons
            echo '<div class="tabs">';
            echo '<button class="tablinks" onclick="openTab(event, \'Description\')">Description</button>';
            echo '<button class="tablinks" onclick="openTab(event, \'AdditionalInformation\')">Additional Information</button>';
            echo '<button class="tablinks" onclick="openTab(event, \'Reviews\')">Reviews</button>';
            echo '</div>';

            // Description Tab
            echo '<div id="Description" class="tabcontent">';
            echo '<div class="detailed-description">';
            echo '<p>Step into comfort and style with our premium ' . strtolower($product["name"]) . '. ';
            echo 'Crafted from high-quality materials, these socks offer both durability and a soft feel against your skin.</p>';
            echo '</div>';
            echo '</div>';

            // Additional Information Tab
            echo '<div id="AdditionalInformation" class="tabcontent" style="display:none;">';
            echo '<h3>Key features:</h3>';
            echo '<ul>';
            echo '<li>Made from high-quality materials</li>';
            echo '<li>Sizes: ' . implode(', ', $product["sizes"]) . ' to ensure the perfect fit</li>';
            echo '<li>Available colors: ' . count($product["colors"]) . '</li>';
            echo '<li>Priced at ' . $product["price"] . ' per pair</li>';
            echo '</ul>';
            echo '</div>';

            // Reviews Tab
            echo '<div id="Reviews" class="tabcontent" style="display:none;">';
            echo '<div class="rating">';
            echo '<span>★★★★★</span> <span>' . $reviewCount . ' Customer Reviews</span>';
            echo '</div>';
            
            foreach ($reviews as $review) {
                echo '<div class="review-item"><p><strong>' . $review . '</strong></p></div>';
            }
            echo '</div>';
        }
        ?>
    </div>

    <script>
        // Cart management
        function updateCartCounter() {
            let cartCount = parseInt(localStorage.getItem('cartCount')) || 0;
            const cartCounterElement = document.getElementById('cart-counter');
            cartCounterElement.innerText = cartCount;
            cartCounterElement.classList.toggle('active', cartCount > 0);
        }

        function addToCart() {
            const quantityInput = document.getElementById('quantity');
            let quantity = Math.max(1, parseInt(quantityInput.value));
            let cartCount = (parseInt(localStorage.getItem('cartCount')) || 0) + quantity;
            localStorage.setItem('cartCount', cartCount);
            updateCartCounter();
            alert(quantity + ' item(s) added to cart!');
        }

        // Tab management
        function openTab(evt, tabName) {
            const tabcontent = document.getElementsByClassName("tabcontent");
            Array.from(tabcontent).forEach(content => content.style.display = "none");

            const tablinks = document.getElementsByClassName("tablinks");
            Array.from(tablinks).forEach(link => 
                link.className = link.className.replace(" active", "")
            );

            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize cart counter
            updateCartCounter();
            
            // Add to cart button listener
            const addToCartButton = document.getElementById('add-to-cart-button');
            if (addToCartButton) {
                addToCartButton.addEventListener('click', addToCart);
            }

            // Color buttons listeners
            const colorButtons = document.querySelectorAll('.color-button');
            colorButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const newImage = this.getAttribute('data-image');
                    document.getElementById('product-image').src = newImage;
                });
            });

            const sizeButtons = document.querySelectorAll('.size-button');
            sizeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    sizeButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to the clicked button
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>

<?php include 'nav/footer.php'; ?>
</html>