<?php
// Define the card collections
$collections = [
    's20' => [
        'puissance-genetique' => [
            'title' => "Puissance Génétique",
            'sectionId' => 'section1',
            'totalCards' => 286,
            'notGottenCards' => [],
            'displayCards' => [23, 36, 36, 47, 47, 84, 84, 84, 104, 153, 227, 233, 236, 241, 245, 248, 249, 249, 273]
        ],
        'l-ile-fabuleuse' => [
            'title' => "L'île Fabuleuse",
            'sectionId' => 'section2',
            'totalCards' => 86,
            'notGottenCards' => [],
            'displayCards' => []
        ],
        'choc-spatio-temporel' => [
            'title' => 'Choc Spatio-temporel',
            'sectionId' => 'section3',
            'totalCards' => 207,
            'notGottenCards' => [],
            'displayCards' => [7, 67, 110, 156, 159, 159, 160, 164, 173, 176, 191, 204]
        ],
        'lumiere-triomphale' => [
            'title' => 'Lumière Triomphale',
            'sectionId' => 'section4',
            'totalCards' => 96,
            'notGottenCards' => [],
            'displayCards' => [22]
        ]
    ],
    'rsqake2' => [
        'puissance-genetique' => [
            'title' => "Puissance Génétique",
            'sectionId' => 'section1',
            'totalCards' => 286,
            'notGottenCards' => [],
            'displayCards' => [23, 36, 36, 36, 41, 76, 84, 146, 228, 230, 235, 235, 238, 281]
        ],
        'l-ile-fabuleuse' => [
            'title' => "L'île Fabuleuse",
            'sectionId' => 'section2',
            'totalCards' => 86,
            'notGottenCards' => [],
            'displayCards' => [32, 32, 46, 59]
        ],
        'choc-spatio-temporel' => [
            'title' => 'Choc Spatio-temporel',
            'sectionId' => 'section3',
            'totalCards' => 207,
            'notGottenCards' => [],
            'displayCards' => [29, 61, 99, 125, 156, 156, 159, 166, 173, 173, 174, 205]
        ],
        'lumiere-triomphale' => [
            'title' => 'Lumière Triomphale',
            'sectionId' => 'section4',
            'totalCards' => 96,
            'notGottenCards' => [],
            'displayCards' => [47, 76, 77, 79]
        ]
    ],
    'rsqake3' => [
        'puissance-genetique' => [
            'title' => "Puissance Génétique",
            'sectionId' => 'section1',
            'totalCards' => 286,
            'notGottenCards' => [],
            'displayCards' => [4, 41, 47, 96, 228, 232, 236, 244, 252, 270, 271, 274, 279, 280, 281]
        ],
        'l-ile-fabuleuse' => [
            'title' => "L'île Fabuleuse",
            'sectionId' => 'section2',
            'totalCards' => 86,
            'notGottenCards' => [],
            'displayCards' => [72]
        ],
        'choc-spatio-temporel' => [
            'title' => 'Choc Spatio-temporel',
            'sectionId' => 'section3',
            'totalCards' => 207,
            'notGottenCards' => [],
            'displayCards' => [110, 110, 119, 119, 125, 160, 169, 173, 174, 178, 178, 179, 200]
        ],
        'lumiere-triomphale' => [
            'title' => 'Lumière Triomphale',
            'sectionId' => 'section4',
            'totalCards' => 96,
            'notGottenCards' => [],
            'displayCards' => [22, 79, 80]
        ]
    ],
    'rsqake4' => [
        'puissance-genetique' => [
            'title' => "Puissance Génétique",
            'sectionId' => 'section1',
            'totalCards' => 286,
            'notGottenCards' => [],
            'displayCards' => [41, 41, 47, 76, 104, 129, 230, 232, 235, 238, 246, 251, 271, 280]
        ],
        'l-ile-fabuleuse' => [
            'title' => "L'île Fabuleuse",
            'sectionId' => 'section2',
            'totalCards' => 86,
            'notGottenCards' => [],
            'displayCards' => []
        ],
        'choc-spatio-temporel' => [
            'title' => 'Choc Spatio-temporel',
            'sectionId' => 'section3',
            'totalCards' => 207,
            'notGottenCards' => [],
            'displayCards' => [7, 119, 168, 171, 173, 175, 176, 178, 186, 203, 204]
        ],
        'lumiere-triomphale' => [
            'title' => 'Lumière Triomphale',
            'sectionId' => 'section4',
            'totalCards' => 96,
            'notGottenCards' => [],
            'displayCards' => [10, 76, 77, 84]
        ]
    ],
    'rsqake5' => [
        'puissance-genetique' => [
            'title' => "Puissance Génétique",
            'sectionId' => 'section1',
            'totalCards' => 286,
            'notGottenCards' => [],
            'displayCards' => [4, 23, 36, 41, 56, 76, 76, 129, 153, 227, 227, 241, 242, 276, 279]
        ],
        'l-ile-fabuleuse' => [
            'title' => "L'île Fabuleuse",
            'sectionId' => 'section2',
            'totalCards' => 86,
            'notGottenCards' => [],
            'displayCards' => []
        ],
        'choc-spatio-temporel' => [
            'title' => 'Choc Spatio-temporel',
            'sectionId' => 'section3',
            'totalCards' => 207,
            'notGottenCards' => [],
            'displayCards' => [7, 29, 160, 167, 172, 178, 193, 201, 204]
        ],
        'lumiere-triomphale' => [
            'title' => 'Lumière Triomphale',
            'sectionId' => 'section4',
            'totalCards' => 96,
            'notGottenCards' => [],
            'displayCards' => [47, 57, 71, 76, 79, 94]
        ]
    ]
];

// Function to generate the HTML for a collection
function generateCollectionHTML($collectionKey, $collection) {
    $html = '';
    
    // Add collection header
    $html .= <<<HTML
    <div class="section-header">
        <h2 class="section-title">{$collectionKey}</h2>
    </div>
    <div class="card-collection" id="{$collectionKey}">
    HTML;

    // Generate cards for all subcollections
    foreach ($collection as $subKey => $subCollection) {
        $baseUrl = "https://image.pokemonpocket.fr/{$subKey}";
        
        // Only generate HTML for the specified cards
        foreach ($subCollection['displayCards'] as $cardNumber) {
            $class = in_array($cardNumber, $subCollection['notGottenCards']) ? 'card-image-not-gotten' : 'card-image-gotten';
            $html .= <<<HTML
            <div class="card" onclick="openModal('{$baseUrl}/{$cardNumber}.webp')">
                <img src="{$baseUrl}/{$cardNumber}.webp" class="{$class}">
            </div>
            HTML;
        }
    }

    $html .= "</div>\n";
    return $html;
}

// Generate the complete HTML page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secondary Accounts</title>
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

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal img {
            max-width: 90%;
            max-height: 90vh;
            object-fit: contain;
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-modal:hover {
            color: #bbb;
        }

        .card {
            cursor: pointer;
        }
    </style>
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
