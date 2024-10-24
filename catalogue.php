<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalogue.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Catalogue</title>
</head>
<body>
    <!-- Include navbar -->
    <?php include 'nav/navbar.php'; ?>

    <!-- Page title -->
    <div class="title-container">
        <h1 class="page-title">CATALOGUE</h1>
    </div>

    <!-- Search bar -->
    <div class="filter-bar">
        <form method="GET" action="catalogue.php">
            <input 
                type="search" 
                name="search" 
                placeholder="Search" 
                value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
            >
            <button type="submit" class="filter-button">Search</button>
            <a href="catalogue.php" class="show-all-button">Show All</a>
        </form>
    </div>

    <!-- Product grid -->
    <div class="product-grid">
        <?php
        // Product array
        $products = [
            1 => [
                "name" => "Uniform colour socks",
                "description" => "Available in multiple colours, made from high quality organic cotton",
                "price" => "€18.99",
                "image" => "img/Sunny_socks_uni_blue.jpg"
            ],
            2 => [
                "name" => "Classic striped socks",
                "description" => "Available in multiple colours, made from high quality organic cotton",
                "price" => "€18.99",
                "image" => "img/Sunny_socks_blue.jpg"
            ],
            3 => [
                "name" => "Military grade socks",
                "description" => "Available in black only, made from high quality organic cotton",
                "price" => "€22.50",
                "image" => "img/military_socks.jpg"
            ],
            4 => [
                "name" => "Construction socks",
                "description" => "Available in black only, made from high quality organic cotton",
                "price" => "€19.99",
                "image" => "img/construction_socks.jpg"
            ],
            5 => [
                "name" => "Oil & Gas socks",
                "description" => "Available in black only, made from high quality organic cotton",
                "price" => "€19.99",
                "image" => "img/oil_gas_socks.jpg"
            ],
        ];

        // Get and sanitize search term
        $searchTerm = isset($_GET['search']) ? trim($_GET['search']) : '';

        // Filter products based on search term
        $filteredProducts = array_filter($products, function($product) use ($searchTerm) {
            return stripos($product['name'], $searchTerm) !== false || 
                   stripos($product['description'], $searchTerm) !== false;
        });

        // Display products based on search results
        if ($searchTerm && !empty($filteredProducts)) {
            // Show filtered products
            foreach ($filteredProducts as $id => $product) {
                renderProduct($id, $product);
            }
        } elseif ($searchTerm && empty($filteredProducts)) {
            // No matching products found
            echo '<p>No products found matching your search.</p>';
        } else {
            // Show all products
            foreach ($products as $id => $product) {
                renderProduct($id, $product);
            }
        }

        // Helper function to render product card
        function renderProduct($id, $product) {
            echo '<div class="product-item">';
            echo '<a href="single_product.php?id=' . $id . '">';
            echo '<img src="' . $product["image"] . '" alt="' . $product["name"] . '">';
            echo '</a>';
            echo '<h3>' . $product["name"] . '</h3>';
            
            if (isset($product["description"])) {
                echo '<p>' . $product["description"] . '</p>';
            }
            
            echo '<p class="price">' . $product["price"] . '</p>';
            echo '<button class="add-to-cart" onclick="addToCart()">Add to cart</button>';
            echo '</div>';
        }
        ?>

        <script>
            // Initialize cart count from localStorage
            let cartCount = localStorage.getItem('cartCount') 
                ? parseInt(localStorage.getItem('cartCount')) 
                : 0;

            // Update cart counter display
            function updateCartCounter() {
                const cartCounterElement = document.getElementById('cart-counter');
                cartCounterElement.innerText = cartCount;

                // Toggle active class based on cart count
                if (cartCount > 0) {
                    cartCounterElement.classList.add('active');
                } else {
                    cartCounterElement.classList.remove('active');
                }
            }

            // Add item to cart
            function addToCart() {
                cartCount++;
                localStorage.setItem('cartCount', cartCount);
                updateCartCounter();
            }

            // Initialize cart counter on page load
            document.addEventListener('DOMContentLoaded', updateCartCounter);
        </script>
    </div>
</body>

<?php include 'nav/footer.php'; ?>
</html>