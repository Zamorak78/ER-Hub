#!/bin/bash

for i in {1..207}; do
    curl https://image.pokemonpocket.fr/choc-spatio-temporel/$i.webp --output $i.webp
done