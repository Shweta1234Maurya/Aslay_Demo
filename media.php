<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="media-container">
        <h1>Media Main Tab</h1>
        <div class="media-grid">
            <!-- PHP code will dynamically generate these media items -->
            <?php
            $media_items = [
                [
                    'title' => 'THE BLOCKPRINT JOURNEY',
                    'author' => 'Josh Edwards',
                    'date' => '28, February 2018',
                    'image' => 'images/media-pic/media1.jpeg'
                ],
                [
                    'title' => 'JOIN MANUFACTURING 4.0',
                    'author' => 'John Appleseed',
                    'date' => '26, February 2018',
                    'image' => 'images/media-pic/media2.jpeg'
                ],[
                    'title' => 'THE BLOCKPRINT JOURNEY',
                    'author' => 'Josh Edwards',
                    'date' => '28, February 2018',
                    'image' => 'images/media-pic/media1.jpeg'
                ],
                [
                    'title' => 'JOIN MANUFACTURING 4.0',
                    'author' => 'John Appleseed',
                    'date' => '26, February 2018',
                    'image' => 'images/media-pic/media2.jpeg'
                ],[
                    'title' => 'THE BLOCKPRINT JOURNEY',
                    'author' => 'Josh Edwards',
                    'date' => '28, February 2018',
                    'image' => 'images/media-pic/media1.jpeg'
                ],
                [
                    'title' => 'JOIN MANUFACTURING 4.0',
                    'author' => 'John Appleseed',
                    'date' => '26, February 2018',
                    'image' => 'images/media-pic/media2.jpeg'
                ],[
                    'title' => 'THE BLOCKPRINT JOURNEY',
                    'author' => 'Josh Edwards',
                    'date' => '28, February 2018',
                    'image' => 'images/media-pic/media1.jpeg'
                ],
                [
                    'title' => 'JOIN MANUFACTURING 4.0',
                    'author' => 'John Appleseed',
                    'date' => '26, February 2018',
                    'image' => 'images/media-pic/media2.jpeg'
                ],
                [
                    'title' => 'JOIN MANUFACTURING 4.0',
                    'author' => 'John Appleseed',
                    'date' => '26, February 2018',
                    'image' => 'images/media-pic/media2.jpeg'
                ],
                // Add more media items as needed
            ];

            foreach ($media_items as $item) {
                echo '<div class="media-item">';
                echo '<img src="' . $item['image'] . '" alt="' . $item['title'] . '">';
                echo '<div class="media-content">';
                echo '<h3>' . $item['title'] . '</h3>';
                echo '<p>' . $item['author'] . '</p>';
                echo '<span>' . $item['date'] . '</span>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
<?php
    include('footer.php');
?>
