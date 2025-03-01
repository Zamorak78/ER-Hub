<?php
// Define the card collections
$collections = [
    'choc-spatio-temporel' => [
        'title' => 'Choc Spatio-temporel',
        'sectionId' => 'section3',
        'totalCards' => 207,
        'notGottenCards' => [37, 67, 123, 156, 157, 158, 159, 160, 161, 164, 165, 166, 168, 169, 171, 173, 180, 181, 183, 184, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 199, 200, 201, 202, 203, 204, 206, 207]
    ]
];

// Function to generate the HTML for a collection
function generateCollectionHTML($collectionKey, $collection) {
    $baseUrl = "https://image.pokemonpocket.fr/{$collectionKey}";
    
    $html = <<<HTML
    <div class="section-header">
        <h2 class="section-title">{$collection['title']}</h2>
        <div class="button-group">
            <button class="toggle-button" onclick="toggleSection('{$collection['sectionId']}')">Masquer</button>
            <a href="index.html" class="link-button" target="_blank">Acceuil</a>
        </div>
    </div>
    <div class="card-collection" id="{$collection['sectionId']}">
    HTML;

    for ($i = 1; $i <= $collection['totalCards']; $i++) {
        $class = in_array($i, $collection['notGottenCards']) ? 'card-image-not-gotten' : 'card-image-gotten';
        $html .= <<<HTML
        <div class="card">
            <img src="{$baseUrl}/{$i}.webp" class="{$class}">
        </div>
        HTML;
    }

    $html .= "</div>\n";
    return $html;
}

// Generate the complete HTML page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Choc Spatio-temporel</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        /* Card Container */
        .card-collection {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(75px, 1fr));
            gap: 10px;
            max-width: 1200px;
            margin: 20px auto;
        }

        .card-collection.show-all {
            display: block;
        }

        /* Section Title */
        .section-title {
            text-align: left;
            font-size: 24px;
            /* margin-bottom: 20px; */
            color: #333;
        }

        /* Individual Card */
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Card Image */
        .card-image-gotten {
            width: 100%;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }

        .card-image-not-gotten {
            width: 100%;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
            filter: grayscale(100%);
        }

        .card-image-not-gotten:hover {
            filter: grayscale(0%);
        }

        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto 20px auto;
            padding: 0 20px;
        }

        .toggle-button {
            padding: 5px 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .toggle-button:hover {
            background-color: #2980b9;
        }

        .hidden {
            display: none;
        }

        .hidden .card {
            display: none;
        }

        .hidden .card:has(img.card-image-not-gotten) {
            display: block !important;
        }

        .button-group {
            display: flex;
            gap: 10px;
        }

        .link-button {
            padding: 5px 10px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .link-button:hover {
            background-color: #219a52;
        }
    </style>
</head>
<body>
    <?php
    foreach ($collections as $key => $collection) {
        echo generateCollectionHTML($key, $collection);
    }
    ?>

    <script>
        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            const button = section.previousElementSibling.querySelector('.toggle-button');
            const gottenCards = section.querySelectorAll('.card-image-gotten');
            
            if (button.textContent === "Masquer") {
                gottenCards.forEach(img => {
                    img.parentElement.style.display = 'none';
                });
                button.textContent = "Afficher";
            } else {
                gottenCards.forEach(img => {
                    img.parentElement.style.display = 'block';
                });
                button.textContent = "Masquer";
            }
        }
    </script>
</body>
</html>
