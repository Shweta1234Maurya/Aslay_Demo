<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-form {
            flex: 1;
            min-width: 300px;
            margin-right: 20px;
            padding:30px;
            background-color:#f5e8cf;
        }
        .contact-form h1 {
            margin-bottom: 20px;
        }
        .contact-form input, .contact-form select, .contact-form textarea {
            width: calc(40% - 10px);
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .contact-form textarea {
            width: calc(100% - 22px);
            height: 100px;
            resize: vertical;
        }
        .contact-form .full-width {
            width: calc(100% - 22px);
        }
        .contact-form button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff5722;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .contact-info a {
            color: #007bff;
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .contact-form input, .contact-form select {
                width: calc(100% - 22px);
            }
            .container {
                flex-direction: column;
            }
            .contact-form, .contact-info {
                margin: 0;
            }
        }
    </style>
</head>
<body>
<h1>Write to Us</h1>
    <div class="container">
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
</body>
</html>
