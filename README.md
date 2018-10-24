# Slim & Behat Skeleton

Skeleton application using Slim 3 and Behat.

The following instructions assume you're using Docker.

## Install

Run the following command to create the project (replace [my-app-name]):

`$ docker run -it --rm -v $(pwd):/app composer create-project fra-c/slim-behat-skeleton [my-app-name]`

Create `.env` file and optionally edit to your needs:

`$ cp .env.example .env`

## Run tests

Run Behat tests with:

`docker-compose run --rm php vendor/bin/behat`

## Composer command

To run composer:

`docker run -it --rm -v $(pwd):/app composer [command] [options] [...]`

Example:

`docker run -it --rm -v $(pwd):/app composer require --dev phpunit/phpunit`

__Note__: Sometimes packages require extensions that won't be found in the composer image. To fix the problem run composer adding the flag `--ignore-platform-reqs` 