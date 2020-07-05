up:
	docker-compose up -d

down:
	docker-compose down --remove-orphans

build:
	docker-compose build

bash:
	docker exec -it travellist-app bash

sniffer:
	docker exec -it travellist-app ./vendor/bin/phpcbf src/
