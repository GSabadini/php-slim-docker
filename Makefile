build:
    docker-compose build

enter:
    docker exec -it app bash

up:
    docker-compose up -d

build:
    docker-compose down --remove-orphans
