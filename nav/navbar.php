<!-- Top text -->
<div class="top-bar">
    Worldwide Shipping • Fast Delivery • Bulk Purchase • 24/7 Customer Support
</div>

<!-- Navbar -->
<nav class="navbar">
    <!-- Logo -->
    <div class="logo">
        <a href="index.php">
            <img src="img/nav/logo.png" alt="Logo">
        </a>
    </div>
    <!-- Navigation buttons left -->
    <ul class="nav-center">
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="catalogue.php">Catalogue</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
    <!-- Navigation buttons right -->
    <div class="nav-right">
        <a href="contact.php" class="contact-button">Contact</a>
        <a href="login.php" class="icon"><img src="img/nav/user.svg" alt="User"></a> 
        <a href="cart.php" class="icon">
            <img src="img/nav/cart.svg" alt="Cart">
            <div id="cart-counter" class="cart-counter"></div> 
        </a>
    </div>
</nav>

<!-- Cart counter -->
<script>
    function updateCartCounter() {
        let cartCount = parseInt(localStorage.getItem('cartCount')) || 0;
        const cartCounterElement = document.getElementById('cart-counter');
        cartCounterElement.innerText = cartCount;
        cartCounterElement.classList.toggle('active', cartCount > 0);
    }

    document.addEventListener('DOMContentLoaded', updateCartCounter);
</script>