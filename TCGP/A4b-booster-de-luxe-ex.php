<?php
// Define the card collections
$collections = [
    'booster-de-luxe-ex' => [
        'title' => 'Booster de Luxe EX',
        'sectionId' => 'section11',
        'totalCards' => 379,
        'notGottenCards' => [2, 3, 7, 12, 18, 19, 22, 26, 28, 35, 36, 37, 39, 46, 50, 55, 56, 58, 67, 70, 72, 73, 77, 81, 82, 83, 84, 86, 87, 89, 91, 97, 100, 111, 113, 123, 125, 126, 129, 136, 145, 150, 152, 157, 162, 167, 169, 171, 172, 174, 175, 178, 181, 186, 190, 192, 193, 195, 197, 199, 201, 204, 206, 208, 211, 212, 217, 219, 224, 225, 226, 227, 229, 231, 237, 243, 247, 250, 251, 253, 255, 256, 258, 261, 265, 266, 268, 276, 281, 284, 289, 291, 295, 296, 298, 301, 309, 311, 313, 317, 320, 321, 327, 329, 331, 341, 345, 349, 353, 
        361, 362, 363, 364, 365, 367, 368, 370, 371, 372, 373, 374, 375, 376, 379]
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
            <a href="index.html" class="link-button">Acceuil</a>
        </div>
    </div>
    <div class="card-collection" id="{$collection['sectionId']}">
    HTML;

    for ($i = 1; $i <= $collection['totalCards']; $i++) {
        $class = in_array($i, $collection['notGottenCards']) ? 'card-image-not-gotten' : 'card-image-gotten';
        $html .= <<<HTML
        <div class="card" onclick="openModal('{$baseUrl}/{$i}.webp')">
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
    <title>Booster de Luxe EX</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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
