#!/bin/bash

for i in {1..286}; do
    curl https://image.pokemonpocket.fr/puissance-genetique/$i.webp --output $i.webp
done