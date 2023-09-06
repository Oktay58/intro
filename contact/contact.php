<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactgegevens</title>
    <link rel="stylesheet" href="/contact/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <a href="/Home/index.html">Home</a>
        <a href="/about_me/about.html">About me</a>
        <a class="active" href="/contact/contact.html">Contact</a>
        <a href="/Projects/projects.html">Projects</a>
       

    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $company = $_POST["company"];
        $message = $_POST["message"];
       
        $to = "oktaytecer40@gmail.com"; // Vervang dit met je eigen e-mailadres
        $subject = "Nieuw formulier ingediend";
        $body = "Naam: $name\n";
        $body .= "E-mail: $email\n";
        $body .= "Telefoonnummer: $phone\n";
        $body .= "Bedrijfsnaam: $company\n";
        $body .= "Bericht:\n$message";
       
        // Stuur de e-mail
        mail($to, $subject, $body);
       
        // Toon een succesbericht
        echo "<p style='color: white; text-align: center;'>Bedankt! Je formulier is succesvol ingediend.</p>";
    }
    ?>
    <div class="form-container">
        <div class="form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" required><br><br>

                <label for="phone">(Optional) Phone Number:</label><br>
                <input type="tel" name="phone" id="phone"><br><br>

                <label for="company">(Optional) Company Name:</label><br>
                <input type="text" name="company" id="company"><br><br>

                <label for="message">Message:</label><br>
                <textarea name="message" id="message" rows="auto" required></textarea><br>

                <input class="submit" type="submit" value="Submit">
            </form>
        </div>
    </div>
        <div class="three">Three</div>
        
      </div>
    
      

    <div class="header">

        <div class="header">

            
            
            
            <!--Waves Container-->
            <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(245,40,145,0.8" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(182,60,225,0.8)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(17,230,214,0.8)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(89, 87, 87)" />
            </g>
            </svg>
            </div>
            <!--Waves end-->
            
            </div>
            <!--Header ends-->
            
            <!--Content starts-->
            <div class="content flex">
              <p>Oktay Tecer </p>
            </div>
            <!--Content ends-->
</body>
</html>