<?php
// Define the card collections
$collections = [
    'promo-a' => [
        'title' => 'Promo-A',
        'sectionId' => 'section100',
        'totalCards' => 49,
        'notGottenCards' => [10, 13, 15, 18, 20, 21, 42, 43, 44, 45, 46, 47, 48, 49]
    ]
];

// Function to generate the HTML for a collection
function generateCollectionHTML($collectionKey, $collection) {
    $baseUrl = "https://image.pokemonpocket.fr/{$collectionKey}";
    
    $html = <<<HTML
    <div class="section-header">
        <h2 class="section-title">{$collection['title']}</h2>
        <button class="toggle-button" onclick="toggleSection('{$collection['sectionId']}')">Masquer</button>
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
    <title>Pokemon Card Collection</title>
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
