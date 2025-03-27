for i in {1..111}; do
    curl https://image.pokemonpocket.fr/rejouissances-rayonnantes/$i.webp --output $i.webp
done
