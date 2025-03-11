#!/bin/bash

for i in {1..96}; do
    curl https://image.pokemonpocket.fr/lumiere-triomphale/$i.webp --output $i.webp
done