<?php
// Define the card collections
$collections = [
    // 'puissance-genetique' => [
    //     'title' => "Puissance Génétique",
    //     'sectionId' => 'section1',
    //     'totalCards' => 286,
    //     'notGottenCards' => [],
    //     'displayCards' => []
    // ],
    // 'l-ile-fabuleuse' => [
    //     'title' => "L'île Fabuleuse",
    //     'sectionId' => 'section2',
    //     'totalCards' => 86,
    //     'notGottenCards' => [],
    //     'displayCards' => [] 
    // ],
    'choc-spatio-temporel' => [
        'title' => 'Choc Spatio-temporel',
        'sectionId' => 'section3',
        'totalCards' => 207,
        'notGottenCards' => [],
        'displayCards' => [157, 160, 165, 166, 168, 171, 173, ]
    ],
    // 'lumiere-triomphale' => [
    //     'title' => 'Lumière Triomphale',
    //     'sectionId' => 'section4',
    //     'totalCards' => 96,
    //     'notGottenCards' => [],
    //     'displayCards' => []
    // ],
    // 'rejouissances-rayonnantes' => [
    //     'title' => 'Réjouissances Rayonnantes',
    //     'sectionId' => 'section5',
    //     'totalCards' => 111,
    //     'notGottenCards' => [],
    //     'displayCards' => []
    // ],
    'gardiens-astraux' => [
        'title' => 'Gardiens Astraux',
        'sectionId' => 'section6',
        'totalCards' => 239,
        'notGottenCards' => [],
        'displayCards' => [20, 22, 24, 41, 49, 112, 143, 156, 158, 161, 163, 166, 178, 179]
    ],
    // 'crise-interdimensionnelle' => [
    //     'title' => 'Crise Interdimensionnelle',
    //     'sectionId' => 'section7',
    //     'totalCards' => 103,
    //     'notGottenCards' => [],
    //     'displayCards' => []
    // ],
    'la-clairiere-d-evoli' => [
        'title' => 'La Clairière d\'Évoli',
        'sectionId' => 'section7',
        'totalCards' => 107,
        'notGottenCards' => [],
        'displayCards' => [24, 35]
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
