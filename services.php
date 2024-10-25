<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/services.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">

    <title>Services</title>
</head>
<body>

    <!-- Invoegen van de navigatiebalk vanuit een extern PHP-bestand -->
    <?php include 'nav/navbar.php'; ?>

    <main>
        <!-- Container voor de hoofdsectie titel -->
        <div class="services-container">
            <!-- Hoofdtitel van de pagina, gestyled met de class 'services-title' -->
            <h1 class="services-title">SERVICES</h1>
        </div>

        <!-- Eerste dienst: Socks Express Service -->
        <div class="SES-container">
            <!-- Titel van de dienst -->
            <h3>Socks Express Service</h3>

            <!-- Beschrijving van de dienst met een speciale class 'page-p' voor extra opmaak -->
            <p class="page-p"> 
                Socks Express Service is a fast and convenient solution for 
                delivering high-quality socks directly to customers' doors.
            </p>
        </div>

        <!-- Tweede dienst: Afterpay In Europe -->
        <div class="AIE-container">
            <!-- Titel van de dienst -->
            <h3>Afterpay In Europe</h3>

            <!-- Beschrijving van de dienst -->
            <p class="page-p"> 
                Afterpay is available as a payment option across Europe, 
                offering customers a flexible and convenient way to shop.
            </p>
        </div>

        <!-- Derde dienst: High Ethics -->
        <div class="HE-container">
            <!-- Titel van de dienst -->
            <h3>High Ethics</h3>

            <!-- Beschrijving van de dienst met nadruk op ethische productie -->
            <p class="page-p">
                The company only partners with suppliers from countries 
                that adhere to strict labor laws and ethical manufacturing 
                standards. By conducting thorough audits and maintaining transparent 
                relationships with its manufacturers, Sunny Socks guarantees 
                that its production process supports fair wages, safe working conditions, 
                and the well-being of all workers.
            </p>
        </div>

        <!-- Vierde dienst: Easy Contact -->
        <div class="EC-container">
            <!-- Titel van de dienst -->
            <h3>Easy Contact</h3>

            <!-- Beschrijving van de dienst, focus op klantondersteuning -->
            <p class="page-p"> 
                We prioritize clear and accessible communication, 
                ensuring that contacting us is easy and hassle-free. 
                Whether through phone, email, or live chat, 
                our dedicated customer support team is always ready to assist 
                with inquiries or concerns.
            </p>
        </div>

    </main>
    
    <!-- Invoegen van de footer vanuit een extern PHP-bestand -->
    <?php include 'nav/footer.php'; ?>

</body>
</html>
