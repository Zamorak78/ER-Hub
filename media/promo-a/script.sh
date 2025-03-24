#!/bin/bash

for i in {1..49}; do
    curl https://image.pokemonpocket.fr/promo-a/$i.webp --output $i.webp
done
