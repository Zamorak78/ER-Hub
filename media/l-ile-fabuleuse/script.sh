#!/bin/bash

for i in {1..86}; do
    curl https://image.pokemonpocket.fr/l-ile-fabuleuse/$i.webp --output $i.webp
done