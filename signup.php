<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Integration and Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="instagram-integration">
        <h1>Instagram integration</h1>
        <div class="instagram-feed">
            <!-- Instagram posts go here -->
            <div class="post"><img src="path_to_image1.jpg" alt="Instagram Post 1"></div>
            <div class="post"><img src="path_to_image2.jpg" alt="Instagram Post 2"></div>
            <div class="post"><img src="path_to_image3.jpg" alt="Instagram Post 3"></div>
            <div class="post"><img src="path_to_image4.jpg" alt="Instagram Post 4"></div>
            <div class="post"><img src="path_to_image5.jpg" alt="Instagram Post 5"></div>
        </div>
    </div>

    <div class="signup-option">
        <h1>Signup option</h1>
        <form action="signup.php" method="POST">
            <h2>Sign up to our newsletter</h2>
            <p>Be the first to hear about new shows and activities</p>
            <input type="text" name="first_name" placeholder="First name" required>
            <input type="text" name="last_name" placeholder="Last name" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
