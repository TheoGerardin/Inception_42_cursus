.PHONY: all up down clean fclean re

all: up

up:
	mkdir -p /home/tgerardi/data/wordpress /home/tgerardi/data/database
	docker-compose -f ./srcs/docker-compose.yml up --build

down:
	docker-compose -f ./srcs/docker-compose.yml down

clean: down
	docker system prune -f

fclean: clean
	rm -rf /home/tgerardi/data/wordpress/* /home/tgerardi/data/database/*
	docker volume rm $(docker volume ls -q)

re: fclean all