<?php
// Define the card collections
$collections = [
    'source-secrete' => [
        'title' => 'Source Secrète',
        'sectionId' => 'section10',
        'totalCards' => 105,
        'notGottenCards' => [3, 10, 12, 18, 22, 25, 28, 35, 36, 53, 61, 63, 67, 68,
         73, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 102, 103, 104, 105]
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
    <title>Source Secrète</title>
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
