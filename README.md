# SETUP

This is a php app that saves to mysql and sends emails. To test, drop the files on a server or run the following...

```
cp .env.example .env
```

copies `.env.example` to `.env` - you can change these values if you want

## Quick Start

### BUILD

```
docker-compose up
```

This will download and build the official php,apache,mysql,phpmyadmin and mailhog docker images and start containers using the values set in `.env`
(3mins) - once downloaded and built _almost_ instant;

Keep the terminal running to see the access logs. hit CTRL+C to stop.

### POPULATE DB (first run only)

> SEPARATE TERMINAL: docker exec -i db mysql -u root -p < dump.sql

# Using the app

Web app : http://localhost:8888

## PhpMyAdmin:

Database app : http://localhost:8080

## Mailhog:

Email app: http://localhost:8025

# Development

## Email

All the emails will be 'Captured' using this system. No emails will be sent.

You can view all the emails using the [Mailhog app](http://localhost:8025).

## Database

Direct access to mysql's command line within the container:
run

```
docker exec -it db mysql -u root -p
```

Or you can use the [PhpMyAdmin](http://localhost:8080) app.

### Import dump

Run this to import a dump file once the db container is up (named in `docker-compose.yml`)

```
docker exec -i db mysql -u root -p < dump.sql
```

(or use [PhpMyAdmin](http://localhost:8080) )

## Docker

Key features:

- A Dockerfile is a small text file that describes a service (shared for all)
- A Dockerfile allows docker to create/build an image on a machine.
- An image is used to run a container.
- Containers create volumes to store data.
- Docker-compose allows you to run multiple containers at once.

You can run Docker as a service / background process if you dont want to keep a window open...

`docker-compose up -d` will start the containers in the background.

`docker-compose down` will stop the background running containers.

---

### Other usefull docker commands:

- `docker-compose up --build` will re-build the images first.

- `docker-compose logs db` will show the db logs for the "db" container.

- `docker ps` will show the running containers.

- `docker image ls` will show the images.

- `docker image rm <image>` will remove the image.

- `docker volume ls` will show the volumes.

- `docker volume rm <volume>` will remove the volume.

> The "Docker desktop" app will also allow you to do all these things.
> [Download here](https://www.docker.com/products/docker-desktop)
