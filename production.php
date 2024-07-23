<div>
    <div class="carousel-container-pro">
        <div class="title">
            <h1>Productions</h1>
            <h3>Upcoming shows at our venues</h3>
        </div>


        <div class="carousel" id="carousel">
            <?php
            // Example card data, this can be fetched from a database
            $cards = [
                ["title" => "The Curious Rat", "description" => "A big adventure for a small city rat", "image" => "images/A Flowering Tree122.jpg", "date" => "17 May–21 July 2024", "details" => "The Curious Rat tells the story of Lucien, a lonely city rat who watches the pigeons from his home under Waterloo Bridge and wishes he could..."],
                ["title" => "Prince Charming", "description" => "It's a lot of pressure being Prince Charming", "image" => "images/DSC00167.JPG", "date" => "18 May–27 July 2024", "details" => "There’s all those dragons to fight and kingdoms to save, not to mention being charming all the time. It's enough to make anyone a little worried..."],
                ["title" => "The Curious Rat", "description" => "A big adventure for a small city rat", "image" => "images/UConn028.jpg", "date" => "17 May–21 July 2024", "details" => "The Curious Rat tells the story of Lucien, a lonely city rat who watches the pigeons from his home under Waterloo Bridge and wishes he could..."],
                ["title" => "Prince Charming", "description" => "It's a lot of pressure being Prince Charming", "image" => "images/DSC07657.JPG", "date" => "18 May–27 July 2024", "details" => "There’s all those dragons to fight and kingdoms to save, not to mention being charming all the time. It's enough to make anyone a little worried..."],
                ["title" => "Prince Charming", "description" => "It's a lot of pressure being Prince Charming", "image" => "images/DSC07657.JPG", "date" => "18 May–27 July 2024", "details" => "There’s all those dragons to fight and kingdoms to save, not to mention being charming all the time. It's enough to make anyone a little worried..."],
                ["title" => "Prince Charming", "description" => "It's a lot of pressure being Prince Charming", "image" => "images/DSC00167.JPG", "date" => "18 May–27 July 2024", "details" => "There’s all those dragons to fight and kingdoms to save, not to mention being charming all the time. It's enough to make anyone a little worried..."],
                ["title" => "Prince Charming", "description" => "It's a lot of pressure being Prince Charming", "image" => "images/DSC00167.JPG", "date" => "18 May–27 July 2024", "details" => "There’s all those dragons to fight and kingdoms to save, not to mention being charming all the time. It's enough to make anyone a little worried..."],
                ["title" => "Prince Charming", "description" => "It's a lot of pressure being Prince Charming", "image" => "images/DSC00167.JPG", "date" => "18 May–27 July 2024", "details" => "There’s all those dragons to fight and kingdoms to save, not to mention being charming all the time. It's enough to make anyone a little worried..."],
            ];

            foreach ($cards as $card) {
                echo "
                <div class='carousel-item'>
                    <div class='carousel-inner-item'>
                        <img src='{$card['image']}' alt='{$card['title']}'>
                        <h3>{$card['title']}</h3>
                        <p><strong>{$card['date']}</strong></p>
                        <p>{$card['description']}</p>
                        <p>{$card['details']}</p>
                    </div>
                </div>";
            }
            ?>
        </div>
        <button class="carousel-button prev" onclick="prevSlide()">&#9664;</button>
        <button class="carousel-button next" onclick="nextSlide()">&#9654;</button>
        <button class="view-more">View more</button>
    </div>

</div>
<div class="container">
    <div class="filters">
        <button class="filter-btn active" data-filter="all">All Festivals</button>
        <button class="filter-btn" data-filter="current">Current</button>
        <button class="filter-btn" data-filter="upcoming">Upcoming</button>
        <button class="filter-btn" data-filter="past">Past</button>
    </div>

    <div class="cards">
        <div class="card" data-category="current">
            <img src="https://teamworkarts.com/uploads_teamworkarts/festival/1719319122-jlf-houston.png" alt="JLF USA Houston">
            <div class="card-text">
                <h3>JLF USA Houston</h3>
                <p>Houston</p>
                <p>13 Sep 2024 - 15 Sep 2024</p>
            </div>
        </div>
        <div class="card" data-category="current">
            <img src="https://teamworkarts.com/uploads_teamworkarts/festival/1719319511-jlf-new-york.png" alt="JLF USA New York">
            <div class="card-text">
                <h3>JLF USA New York</h3>
                <p>New York</p>
                <p>13 Sep 2024 - 15 Sep 2024</p>
            </div>
        </div>
        <div class="card" data-category="upcoming">
            <img src="https://teamworkarts.com/uploads_teamworkarts/festival/1719319088-jlf-colorado.png" alt="JLF USA Colorado">
            <div class="card-text">
                <h3>JLF USA Colorado</h3>
                <p> Colorado</p>
                <p>13 Sep 2024 - 15 Sep 2024</p>
            </div>
        </div>
        <div class="card" data-category="past">
            <img src="https://teamworkarts.com/uploads_teamworkarts/festival/1719319199-jlf-seattle.png" alt="JLF USA Seattle">
            <div class="card-text">
                <h3>JLF USA Seattle</h3>
                <p>Seattle</p>
                <p>13 Sep 2024 - 15 Sep 2024</p>
            </div>
        </div>
        <div class="card" data-category="current">
            <img src="https://teamworkarts.com/uploads_teamworkarts/festival/1719319217-jlf-north-carolina.png" alt="JLF USA North Carolina">
            <div class="card-text">
                <h3>JLF USA North Carolina</h3>
                <p>Carolina</p>
                <p>13 Sep 2024 - 15 Sep 2024</p>
            </div>
        </div>
        <div class="card" data-category="upcoming">
            <img src="https://teamworkarts.com/uploads_teamworkarts/festival/1719318523-friends-of-music.png" alt="India by the Nile">
            <div class="card-text">
                <h3>India by the Nile</h3>
                <p> Nile</p>
                <p>13 Sep 2024 - 15 Sep 2024</p>
            </div>
        </div>
        <div class="card" data-category="past">
            <img src="https://teamworkarts.com/uploads_teamworkarts/festival/1719318931-india-by-the-nile.png" alt="Confluence">
            <div class="card-text">
                <h3>Confluence</h3>
                <p>13 Sep 2024 - 15 Sep 2024</p>
            </div>
        </div>
        <div class="card" data-category="current">
            <img src="https://teamworkarts.com/uploads_teamworkarts/festival/1719319199-jlf-seattle.png" alt="JLF USA Seattle">
            <div class="card-text">
                <h3>JLF USA Seattle</h3>
                <p>Seattle</p>
                <p>13 Sep 2024 - 15 Sep 2024</p>
            </div>
        </div>
    </div>
</div>