NAME = inception

all: up

up:
	docker-compose up -d --build

down:
	docker-compose down

re: down up
