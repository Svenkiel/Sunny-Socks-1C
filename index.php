<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <title>Home</title>
</head>
<body>
    <!-- Header -->
    <?php include 'nav/navbar.php'; ?>

    <!-- Popup -->
    <div class="popup">
        <div class="popup-content">
            <div class="close">&times;</div>
            <h1>10%</h1><h1 class="yellow-off"> OFF</h1>
            <p>Enter you Email and receive 10% off your next order.</p>
            <?php
                /* Checks if continue is pressed */
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    /* Stores the email and checks if it's valid */
                    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

                    /* Displayed if the email is valid */
                    if($email == !false){
                        echo 'Thank you! Your coupon will be send via email shortly';
                    }
                    /* Displayed if the email is invalid */
                    else{
                        echo 'Please use a valid email adress';
                        echo '
                        <form action="' . $_SERVER['PHP_SELF']. '" method="POST">
                            <input type="text" name="email" id="email" placeholder="Email:" class="form-input">
                            <input type="submit" value="CONTINUE" class="submit">
                        </form>
                    
                    ';
                    }
                       
                }
                /* Displayed if continue is not pressed */
                else{
                    echo '
                        <form action="' . $_SERVER['PHP_SELF']. '" method="POST">
                            <input type="text" name="email" id="email" placeholder="Email:" class="form-input">
                            <input type="submit" value="CONTINUE" class="submit">
                        </form>
                    
                    ';
                }
            ?>
        </div>
    </div>




    <main>
        <!-- Top of home page -->
        <div class="home-top">
            <img src="img/Sunny_socks_blue.jpg" alt="Sok" class="background">
            <img src="img/sunny_logos_slogan_blue.png" alt="Sunny Socks" class="sunny-logo">
            <p>Sunny Socks delivers high-quality, sustainable socks.
            With fast shipping and an easy ordering process, Sunny Socks makes it convenient for customers to enjoy premium, 
            sustainable products without delay, offering the perfect blend of quality, responsibility, and speed.</p>
            <a href="catalogue.php" class="catalogue-button"><b>CATALOGUE</b></a>
        </div>
        <!-- Middle of home page -->
        <div class="home-middle">
            <h1 class="home-title"><b>WHY ORDER FROM US?</b></h1>
            <div class="points">
                <div class="point-one">
                    <h1><b>01</b></h1>
                    <h2><b>Fast Shipping</b></h2>
                    <a href="services.php">
                        <button class="points-btn">&#8592;</button>
                    </a>
                    <p>Socks Express Service is a fast and convenient solution for delivering high-quality socks directly to customers' doors.</p>
                </div>
                <div class="point-two">
                    <h1><b>02</b></h1>
                    <h2><b>Easy and Fast Contact</b></h2>
                    <a href="contact.php">
                        <button class="points-btn">&#8592;</button>
                    </a>
                </div>
                <div class="point-three">
                    <h1><b>03</b></h1>
                    <h2><b>Ethical and Sustainable Socks</b></h2>
                    <a href="about.php">
                        <button class="points-btn">&#8592;</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Bottom of home page -->
        <div class="home-bottom">
            <h1 class="home-title"><b>TESTIMONIALS</b></h1>
            
            <!-- Carousel -->
            <div class="carousel-container">
                <button class="carousel-btn left-btn">&#8592;</button>
                
                <div class="carousel">
                    <div class="carousel-item">
                        <h3>Sarah T., Operations Manager (Oil & Gas Industry, USA)</h3>
                        <p>"Sunny Socks has been an absolute game-changer for our team working in extreme conditions. The durability and warmth of their socks are unmatched. We've noticed a big improvement in comfort, especially during long shifts in cold environments. Highly recommended!"</p>
                    </div>
                    <div class="carousel-item">
                        <h3>Liam W., Procurement Specialist (Construction Company, UK)</h3>
                        <p>"We've been using Sunny Socks for our entire crew, and the feedback has been fantastic. The socks are tough, comfortable, and perfect for long days on construction sites. The service was efficient, and delivery to the UK was fast. We'll definitely keep ordering!"</p>
                    </div>
                    <div class="carousel-item">
                        <h3>Hiroshi S., Supply Chain Manager (Manufacturing Industry, Japan)</h3>
                        <p>"Our factory workers needed socks that could endure tough, high-demand shifts. Sunny Socks delivered beyond our expectations. Their socks are robust, high-quality, and maintain comfort even after hours of use. Excellent product for industrial settings!"</p>
                    </div>
                    <div class="carousel-item">
                        <h3>Natalie R., Logistics Coordinator (Military Supplier, Germany)</h3>
                        <p>"We’ve sourced socks for our military clients from various suppliers, but Sunny Socks stands out for their reliability and quality. The military edition socks are built to last, and our clients appreciate the extra warmth and protection. A great partnership for us!"</p>
                    </div>
                    <div class="carousel-item">
                        <h3>Carlos D., Safety Officer (Oil Field Services, Brazil)</h3>
                        <p>"Our team works in some of the harshest environments, and Sunny Socks has been vital in keeping our workers comfortable. These socks hold up well against wear and tear, and they’re perfect for all-day use in the field. Exceptional performance!"</p>
                    </div>
                    <div class="carousel-item">
                        <h3>Emily P., Fleet Manager (Logistics, Canada)</h3>
                        <p>"We outfitted our entire logistics team with Sunny Socks, and the difference has been noticeable. Their feet stay warm during cold deliveries, and the socks have a great fit for long hours. Plus, the shipping process was smooth and fast!"</p>
                    </div>
                    <div class="carousel-item">
                        <h3>Anton M., Procurement Manager (Engineering Firm, Russia)</h3>
                        <p>"Finding socks that are both warm and durable for our engineering teams was a challenge until we discovered Sunny Socks. They provide comfort and resilience, even in sub-zero conditions. Our workers love them, and the international delivery was flawless!"</p>
                    </div>
                    <div class="carousel-item">
                        <h3>Sophie L., HR Director (Mining Corporation, Australia)</h3>
                        <p>"Sunny Socks are exactly what our workforce needed. The socks are tough enough for the mining industry, and they provide the comfort and warmth necessary for long shifts underground. We’re extremely satisfied with the quality and service."</p>
                    </div>
                    <div class="carousel-item">
                        <h3>Ahmed K., Operations Supervisor (Oil & Gas, UAE)</h3>
                        <p>"Our field workers are exposed to harsh conditions, and Sunny Socks has made a noticeable difference in their comfort. These socks are heavy-duty yet breathable, perfect for hot and cold environments. We will definitely continue partnering with Sunny Socks!"</p>
                    </div>
                </div>

                <button class="carousel-btn right-btn">&#8594;</button>
            </div>


        
        </div>

    </main>
    <!-- Footer -->
    <?php include 'nav/footer.php'; ?>

    <script>
        /* Javascript for popup */
        var popup = document.getElementsByClassName("popup")[0];

        var span = document.getElementsByClassName("close")[0];

        window.onload = function() {
        popup.style.display = "block";
        }

        span.onclick = function() {
        popup.style.display = "none";
        }

        window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
        }
        /* Javascript for carousel */
        const carousel = document.querySelector('.carousel');
                const leftBtn = document.querySelector('.left-btn');
                const rightBtn = document.querySelector('.right-btn');

                let scrollPosition = 0;
                const carouselItems = document.querySelectorAll('.carousel-item');
                const itemWidth = carouselItems[0].clientWidth + 20; 

                
                rightBtn.addEventListener('click', () => {
                    if (scrollPosition < carousel.scrollWidth - carousel.clientWidth) {
                        scrollPosition += itemWidth * 3; 
                        carousel.scrollTo({
                            left: scrollPosition,
                            behavior: 'smooth'
                        });
                    }
                });

                leftBtn.addEventListener('click', () => {
                    if (scrollPosition > 0) {
                        scrollPosition -= itemWidth * 3; 
                        carousel.scrollTo({
                            left: scrollPosition,
                            behavior: 'smooth'
                        });
                    }
                });

    </script>

</body>
</html>