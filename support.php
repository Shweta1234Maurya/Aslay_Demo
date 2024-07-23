<div class="supports">
    <h1>Supporters/Sponsors</h1>
    <marquee behavior="" direction="">
        <div class="supporters-container">

            <?php
            // Example supporter data, this can be fetched from a database
            $supporters = [

                ["image" => "images/logos/supporter2.png", "name" => "Norwich City Council"],
                ["image" => "images/logos/supporter3.png", "name" => "Norfolk County Council"],
                ["image" => "images/logos/supporter4.png", "name" => "Ashtons Legal"],
                ["image" => "images/logos/supporter5.webp", "name" => "Supporter 5"],
                ["image" => "images/logos/supporter6.jpg", "name" => "Supporter 5"],
                ["image" => "images/logos/supporter7.png", "name" => "Supporter 5"],
                ["image" => "images/logos/supporter8.jpg", "name" => "Supporter 5"],
                ["image" => "images/logos/supporter9.png", "name" => "Supporter 5"],
                ["image" => "images/logos/supporter10.jpg", "name" => "Supporter 5"],
                ["image" => "images/logos/supporter11.png", "name" => "Supporter 5"],
                ["image" => "images/logos/supporter13.png", "name" => "Supporter 5"],
                ["image" => "images/logos/supporter15.jpg", "name" => "Supporter 5"],

            ];

            // Generate supporter items
            foreach ($supporters as $supporter) {
                echo "
    
    <div class='supporter-item'>
        <img src='{$supporter['image']}' alt='{$supporter['name']}'>
        <p>{$supporter['name']}</p>
    </div>";
            }
            ?>


        </div>
    </marquee>

</div>