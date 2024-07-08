<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Work</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 10px;
        }
        p {
            text-align: center;
            margin-bottom: 40px;
            font-size: 18px;
            color: #ccc;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .gallery img {
            width: 300px;
            height: auto;
            margin: 10px;
            border-radius: 10px;
            transition: transform 0.2s;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
        @media (max-width: 768px) {
            .gallery img {
                width: 100%;
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Our Work</h1>
        <p>We'll let our work speak for itself.</p>
        <div class="gallery">
            <?php
            $images = [
                'images/img1.jpg',
                'images/img2.jpg',
                'images/img3.jpg',
                'images/img4.jpg',
                'images/img5.jpg',
                'images/img6.jpg',
                'images/img7.jpg',
                'images/img8.jpg',
                'images/img9.jpg',
                'images/img10.jpg',
                'images/img11.jpg',
                'images/img12.jpg'
            ];

            foreach ($images as $image) {
                echo "<img src='$image' alt='Work Image'>";
            }
            ?>
        </div>
    </div>
</body>
</html>
