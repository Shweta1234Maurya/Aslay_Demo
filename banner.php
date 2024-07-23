<?php
// Example array of images with titles (you can fetch this from a database)
$slides = [
    ["image" => "images/slider_img/slider1.JPG", "title" => "Slide 1 Title"],
    ["image" => "images/slider_img/slider2.JPG", "title" => "Slide 2 Title"],
    ["image" => "images/slider_img/slider3.JPG", "title" => "Slide 3 Title"],
    ["image" => "images/slider_img/slider6.JPG", "title" => "Slide 4 Title"],
    ["image" => "images/slider_img/slider5.JPG", "title" => "Slide 5 Title"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Example</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .carousel-container-banner {
            position: relative;
            max-width: 100%;
            max-height: 400px;
            margin: auto;
            overflow: hidden;
            background: #000;
        }

        .carousel-container-banner .carousel-slide {
            display: none;
            text-align: center;
            color: white;
            position: relative;
        }

        .carousel-container-banner .carousel-slide img {
            width: 100%;
            height: 500px;
        }

        .carousel-container-banner .carousel-title {
            position: absolute;
            bottom: 50%;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 20px;
        }

        .carousel-container-banner .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .carousel-container-banner .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .carousel-container-banner .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>

<body>

    <div class="carousel-container-banner">
        <?php foreach ($slides as $index => $slide) : ?>
            <div class="carousel-slide">
                <img src="<?php echo $slide["image"]; ?>" alt="Image <?php echo $index + 1; ?>">
                <div class="carousel-title"><?php echo $slide["title"]; ?></div>
            </div>
        <?php endforeach; ?>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("carousel-slide");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }

        // Auto slide functionality
        setInterval(function() {
            plusSlides(1);
        }, 3000); // Change slide every 3 seconds
    </script>

</body>

</html>