<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trustees Page</title>
    
</head>
<body>
    <h1>Trustees (photo and Name only)</h1>
    <div class="trustees-container">
        <?php
        // Trustee data
        $trustees = [
            ["name" => "DADI PUDUMJEE", "image" => "images/daidy.JPG", "link" => "https://drive.google.com/file/d/1ajdYp-wcDUP6npqwD9DHIO50OaijY__S/view"],
            ["name" => "SUNIL DOGRA", "image" => "images/DSC03033.JPG", "link" => "https://drive.google.com/file/d/1LWCTSYcwiOIfRx1jQdo0uWjFkJRajN09/view?usp=share_link"],
            ["name" => "Sanjoy Roy", "image" => "images/sanjoy-roy-lead1.jpg", "link" => "https://drive.google.com/file/d/18kqouBmvz1zBikYC98qPk9nHLWVxKOgo/view"],
            ["name" => "Coomi Kapoor", "image" => "images/Coomi-Kapoor_0.jpg", "link" => "https://drive.google.com/file/d/1maZ0Poa9CE0YmJIOFX62ueO5nLkYAogL/view"],
        ];

        // Generate trustee items
        foreach ($trustees as $trustee) {
            echo "
            <div class='trustee-item'>
                <img src='{$trustee['image']}' alt='{$trustee['name']}'>
                <div class='trustee-name'>{$trustee['name']}</div>
                <a href='{$trustee['link']}' class='trustee-link'>View Profile</a>
            </div>";
        }
        ?>
    </div>
    <button class="view-more">View Details</button>
</body>
</html>
