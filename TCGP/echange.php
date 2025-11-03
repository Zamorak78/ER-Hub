<?php
// Define the card collections
$collections = [
    'puissance-genetique' => [
        'title' => "Puissance Génétique",
        'sectionId' => 'section1',
        'totalCards' => 286,
        'notGottenCards' => [253, 254, 257, 260, 261, 263, 264, 265, 266, 269],
        'displayCards' => [252, 253, 254, 255, 257, 260, 261, 263, 264, 265, 266, 268, 269, 270, 271, 278]
    ],
    'l-ile-fabuleuse' => [
        'title' => "L'île Fabuleuse",
        'sectionId' => 'section2',
        'totalCards' => 86,
        'notGottenCards' => [75, 76, 78, 79, 80, 81, 83, 84],
        'displayCards' => [75, 76, 78, 79, 80, 81, 83, 84] 
    ],
    'choc-spatio-temporel' => [
        'title' => 'Choc Spatio-temporel',
        'sectionId' => 'section3',
        'totalCards' => 207,
        'notGottenCards' => [180, 181, 183, 184, 187, 188, 189, 190, 192, 194, 195, 196, 197, 199],
        'displayCards' => [180, 181, 183, 184, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 199, 200, 201, 203]
    ],
    'lumiere-triomphale' => [
        'title' => 'Lumière Triomphale',
        'sectionId' => 'section4',
        'totalCards' => 96,
        'notGottenCards' => [82, 83, 85, 86, 87, 88, 89, 90, 91, 92, 93],
        'displayCards' => [82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94]
    ],
    'rejouissances-rayonnantes' => [
        'title' => 'Réjouissances Rayonnantes',
        'sectionId' => 'section5',
        'totalCards' => 111,
        'notGottenCards' => [80, 81, 82, 83, 85, 86, 87, 88, 89, 91, 93, 94, 95, 99, 100, 103, 108, 109],
        'displayCards' => [80, 81, 82, 83, 85, 86, 87, 88, 89, 91, 93, 94, 95, 99, 100, 103, 108, 109]
    ],
    'gardiens-astraux' => [
        'title' => 'Gardiens Astraux',
        'sectionId' => 'section6',
        'totalCards' => 239,
        'notGottenCards' => [180, 182, 187, 188, 190, 191, 192, 194, 195, 196, 199, 200, 202, 204, 205, 213, 217, 218, 221, 226, 230, 235],
        'displayCards' => [180, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 194, 195, 196, 198, 199, 200, 202, 203, 204, 205, 207, 211, 213, 215, 217, 218, 219, 221, 225, 226, 227, 228, 230, 231, 232, 234, 235, 236, 237]
    ],
    'crise-interdimensionnelle' => [
        'title' => 'Crise Interdimensionnelle',
        'sectionId' => 'section7',
        'totalCards' => 103,
        'notGottenCards' => [76, 77, 79, 81, 82, 83, 84, 85, 86, 87, 89, 90, 91, 92, 93, 94, 96, 97, 98, 99, 101, 102],
        'displayCards' => [76, 77, 79, 81, 82, 83, 84, 85, 86, 87, 89, 90, 91, 92, 93, 94, 96, 97, 98, 99, 101, 102]
    ],
    'la-clairiere-d-evoli' => [
        'title' => 'La Clairière d\'Évoli',
        'sectionId' => 'section8',
        'totalCards' => 107,
        'notGottenCards' => [79, 80, 81, 83, 84, 85, 86, 87, 89, 90, 91, 94, 95, 97, 98, 99, 100, 101, 102, 106],
        'displayCards' => [79, 80, 81, 83, 84, 85, 86, 87, 89, 90, 91, 94, 95, 96, 97, 98, 99, 100, 101, 102, 104, 106]
    ],
    'sagesse-entre-ciel-et-mer' => [
        'title' => 'Sagesse entre Ciel et Mer',
        'sectionId' => 'section9',
        'totalCards' => 241,
        'notGottenCards' => [186, 191, 192, 193, 194, 195, 197, 201, 204, 206, 207, 208, 212, 213, 218, 221, 222, 227, 228, 229, 230, 233, 237],
        'displayCards' => [186, 189, 190, 191, 192, 193, 194, 195, 196, 197, 199, 201, 203, 204, 205, 206, 207, 208, 212, 213, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 227, 228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238]
    ],
    'source-secrete' => [
        'title' => 'Source Secrète',
        'sectionId' => 'section10',
        'totalCards' => 105,
        'notGottenCards' => [78, 79, 80, 81, 83, 84, 86, 89, 92, 93, 94, 95, 97, 98, 99, 102, 103, 104],
        'displayCards' => [78, 79, 80, 81, 83, 84, 86, 89, 91, 92, 93, 94, 95, 97, 98, 99, 102, 103, 104]
    ]
    // 'promo-a' => [
    //     'title' => 'Promo-A',
    //     'sectionId' => 'section100',
    //     'totalCards' => 49,
    //     'notGottenCards' => [],
    //     'displayCards' => []
    // ]
];

// Function to generate the HTML for a collection
function generateCollectionHTML($collectionKey, $collection) {
    $baseUrl = "https://image.pokemonpocket.fr/{$collectionKey}";
    
    $html = <<<HTML
    <div class="section-header">
        <h2 class="section-title">{$collection['title']}</h2>
    </div>
    <div class="card-collection" id="{$collection['sectionId']}">
    HTML;

    // Only generate HTML for the specified cards
    foreach ($collection['displayCards'] as $cardNumber) {
        $class = in_array($cardNumber, $collection['notGottenCards']) ? 'card-image-not-gotten' : 'card-image-gotten';
        $html .= <<<HTML
        <div class="card" onclick="openModal('{$baseUrl}/{$cardNumber}.webp')">
            <img src="{$baseUrl}/{$cardNumber}.webp" class="{$class}">
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
    <title>Echange</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="button-group">
        <a href="index.html" class="link-button">Acceuil</a>
    </div>
    <?php
    foreach ($collections as $key => $collection) {
        echo generateCollectionHTML($key, $collection);
    }
    ?>

    <div id="imageModal" class="modal">
        <span class="close-modal">&times;</span>
        <img id="modalImage" src="" alt="Modal Image">
    </div>

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

        // Add these new functions
        function openModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modal.style.display = "flex";
            modalImg.src = imageSrc;
        }

        // Close modal when clicking the X
        document.querySelector('.close-modal').onclick = function() {
            document.getElementById('imageModal').style.display = "none";
        }

        // Close modal when clicking outside the image
        document.getElementById('imageModal').onclick = function(e) {
            if (e.target === this) {
                this.style.display = "none";
            }
        }
    </script>
</body>
</html>
