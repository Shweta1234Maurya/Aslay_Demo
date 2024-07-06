<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Write to Us</h1>
    <div class="form-container">
       
        <div class="contact-form">
            <form action="contact_form.php" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="tel" name="mobile" placeholder="Mobile Number" required>
                <select name="property" required>
                    <option value="">-- Select Property --</option>
                    <option value="Property1">Property1</option>
                    <option value="Property2">Property2</option>
                </select>
                <input type="date" name="checkin" placeholder="Check-in Date" required>
                <input type="date" name="checkout" placeholder="Checkout Date" required>
                <input type="number" name="rooms" placeholder="Total Rooms Required" required>
                <input type="number" name="pax" placeholder="Total Pax" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <div class="full-width">
                    <input type="checkbox" name="robot" required> I'm not a robot
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
        <div class="contact-info">
            <p>For product and brand queries, write to:</p>
            <p><a href="mailto:shoba@rareindia.com">Ms. Shoba Mohan at: shoba@rareindia.com</a></p>
            <p>For domestic bookings, write to:</p>
            <p><a href="mailto:domesticsales@rareindia.com">Mr. Murali Sundaram at: domesticsales@rareindia.com</a></p>
            <p>For other information write to:</p>
            <p><a href="mailto:info@rareindia.com">info@rareindia.com</a></p>
            <p>RARE India<br>
               Unit no. 217,<br>
               2nd floor, Tower-C, Nirvana Courtyard<br>
               Sector 50, Nirvana Country,<br>
               Gurugram, Haryana – 122018</p>
        </div>
    </div>
    </div>
    <?php
    include('footer.php');
?>
</body>
</html>
