<?php
// Define the card collections
$collections = [
    'booster-de-luxe-ex' => [
        'title' => 'Booster de Luxe EX',
        'sectionId' => 'section11',
        'totalCards' => 379,
        'notGottenCards' => [2, 3, 6, 7, 12, 13, 14, 17, 18, 19, 22, 25, 26, 27, 28, 30, 31, 32, 35, 36, 37, 39, 40, 41, 43, 44, 46, 48, 50, 53, 55, 56, 58, 62, 67, 68, 69, 70, 72, 73, 74, 76, 77, 79, 81, 82, 83, 84, 86, 87, 89, 91, 94, 95, 97, 100, 102, 105, 106, 107, 108, 109, 111, 112, 113, 114, 117, 119, 123, 125, 126, 129, 130, 131, 134, 136, 138, 140, 142, 143, 145, 150, 152, 153, 156, 157, 162, 165, 167, 169, 171, 172, 173, 174, 175, 176, 178, 179, 180, 181, 183, 184, 186, 187, 188, 190, 192, 193, 195, 197, 198, 199, 201, 202, 203, 204, 205, 206, 208, 210, 211, 212, 213, 214, 217, 218, 219, 222, 224, 225, 226, 227, 229, 231, 233, 235, 237, 240, 243, 244, 247, 248, 249, 250, 251, 252, 253, 255, 256, 258, 261, 264, 265, 266, 268, 276, 277, 278, 279, 281, 283, 284, 287, 289, 291, 295, 296, 298, 301, 302, 303, 305, 307, 309, 310, 311, 312, 313, 315, 316, 317, 319, 320, 321, 323, 327, 329, 330, 331, 335, 337, 339, 341, 345, 346, 347, 349, 351, 352, 353, 
        357, 360, 361, 362, 363, 364, 365, 366, 367, 368, 370, 371, 372, 373, 374, 375, 376, 379]
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
