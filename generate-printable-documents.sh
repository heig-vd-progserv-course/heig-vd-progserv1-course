#!/usr/bin/env bash

## Variables
WORKDIR=$(pwd)
PANDOC_DOCKER_IMAGE="pandoc/latex:3-alpine"

## Script
# Check if Pandoc is installed locally
if command -v "pandoc" > /dev/null 2>&1; then
    echo "Pandoc installed locally, using it..."
    PANDOC_CMD=(pandoc)
else
    echo "Pandoc not installed, using its Docker image..."
    PANDOC_CMD=(
        docker run --rm
        --entrypoint="pandoc"
        --volume="${WORKDIR}:/data"
        --user="$(id -u):$(id -g)"
        "$PANDOC_DOCKER_IMAGE"
    )
fi

# Enable for recursive globbing
shopt -s globstar nullglob

echo "Converting printable documents to PDF..."

for file in **/IMPRESSIONS.md; do
    path="$(dirname "$file")"
    directory="$(basename "$path")"
    filename="$(basename "$file" .md)"

    "${PANDOC_CMD[@]}" "--output=$path/${directory}-${filename,,}.pdf" "$file"
done

echo "All printable documents processed successfully!"
