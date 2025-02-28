<?php
// Define the card collections
$collections = [
    'l-ile-fabuleuse' => [
        'title' => "L'île Fabuleuse",
        'sectionId' => 'section2',
        'totalCards' => 86,
        // Array of card numbers that are not gotten (all others are considered gotten)
        'notGottenCards' => [69, 71, 75, 76, 78, 79, 80, 81, 83, 84, 86]
    ],
    'choc-spatio-temporel' => [
        'title' => 'Choc Spatio-temporel',
        'sectionId' => 'section3',
        'totalCards' => 207,
        'notGottenCards' => [37, 67, 123, 156, 157, 158, 159, 160, 161, 164, 165, 166, 168, 169, 171, 173, 180, 181, 183, 184, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 199, 200, 201, 202, 203, 204, 206, 207]
    ],
    'lumiere-triomphale' => [
        'title' => 'Lumière Triomphale',
        'sectionId' => 'section4',
        'totalCards' => 96,
        'notGottenCards' => [8, 9, 10, 13, 19, 21, 22, 23, 33, 41, 50, 52, 53, 57, 59, 61, 66, 69, 71, 72, 76, 78, 79, 80, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96]
    ],
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
        /* Add your CSS styles here */
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
