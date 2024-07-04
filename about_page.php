
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoneLion Puppet Theatre</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.main-banner {
    position: relative;
    width: 100%;
    height: 400px;
    overflow: hidden;
}

.main-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
}

.banner-text h1 {
    font-size: 36px;
    margin: 0;
}

.banner-text .donate-button {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #32b296;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 20px;
}

.container {
    max-width: 1000px;
    margin: auto;
    padding: 20px;
    background-color: white;
}

section {
    padding: 20px;
    border-bottom: 1px solid #ddd;
    display: flex;
}
section .about-content{
    margin: 20px;
}
section h2 {
    font-size: 24px;
    margin-bottom: 
}
.container img{
    height: 250px;
    width:300px;
}
    </style>
</head>
<body>
    <header class="main-banner">
        <img src="images/_DSC1069.JPG" alt="Main Banner">
        <div class="banner-text">
            <h1>StoneLion Puppet Theatre</h1>
            <a href="#donate" class="donate-button">Help Feed the Puppets - Donate through PayPal here!</a>
        </div>
    </header>
    
    <div class="container">
        <!-- Sections -->
        <section id="in-schools">
            <div class="about-content">
             <h2>In Schools</h2>
            <p>Little Angel Theatre runs a targeted Schools Partnership Programme with its eight closest primary schools. Schools that are part of the programme have access to a wealth of opportunities and resources to enrich pupil artistic engagement and support teachers to enliven and enhance the curriculum. We also offer puppetry workshops to schools that are not part of the programme.</p>
            </div>
            <img src="images/_DSC1069.JPG" alt="In the Community">
        </section>
        
        <section id="in-the-community">
            <img src="images/_DSC1069.JPG" alt="In the Community">
            <div class="about-content">
            <h2>In the Community</h2>
            <p>Little Angel Theatre runs a dedicated community outreach programme in order to break down barriers to engagement and serve the needs of its entire community in a creative and engaging way - not just those who know about the work or who can afford to participate.</p>
            </div>
           
        </section>
        
        <section id="training-development">
            <div class="about-content">
            <h2>Through Training and Professional Development</h2>
            <p>LAT is committed to developing people, from the children and young people that we work with to our staff team, and from teachers to artists. We run a number of courses and classes for all ages and all levels of experience, as well as hosting placement students and running courses with HEI and FE institutions.</p>
            </div>
            <img src="images/A Flowering Tree122.jpg" alt="Through Training and Professional Development">
        </section>
        
        <section id="our-impact">
        <img src="images/_DSC1069.JPG" alt="In the Community">
           <div class="about-content">
           <h2>Our Impact</h2>
            <p>We are incredibly proud of the work that we do within both our local communities and our wider communities. Find out more and if you would like to make a donation to help support our work, please donate below.</p>
           </div>

        </section>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>
