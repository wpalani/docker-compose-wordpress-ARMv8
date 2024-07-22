# docker-compose-wordpress for arm64v8 based chips.
This project is a fork from [aschmelyun/docker-compose-wordpress](https://github.com/aschmelyun/docker-compose-wordpress).

I usually use [LocalWP](https://localwp.com/) for WordPress development but I ran into a few issues stemming from environment limitations. So I started looking for a simple and reliable Docker Compose workflow that'll allow me more control over the environment and, and I stumbled on [Andrew Schmelyun's](https://github.com/aschmelyun) repo.

The base project is excellent but it doesn't run on arm64 based chips (Apple M1, M2, M3) and hasn't been updated in a while.

[Andrew](https://github.com/aschmelyun) has a very thorough [walkthrough video](https://www.youtube.com/watch?v=kIqWxjDj4IU) on getting everything set up if you'd like to follow it.

### Improvements from the original fork
- Supports arm64 base chips (Apple M1, M2, M3).
- Updated tooling (PHP 8.2 / MySQL 8).
- Environment variables.
- Better container / network naming.
- Persistent storage by default.


## Usage

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system, and then clone this repository.

Next, navigate in your terminal to the directory you cloned this, and spin up the containers for the web server by running `docker-compose up -d --build site`.

After that completes, follow the steps from the [wordpress/README.md](src/README.md) file to get your WordPress installation added in (or create a new blank one).

Bringing up the Docker Compose network with `site` instead of just using `up`, ensures that only our site's containers are brought up at the start, instead of all of the command containers as well. The following are built for our web server, with their exposed ports detailed:

- **nginx** - `:80`
- **mysql** - `:3306`
- **php** - `:9000`

An additional container is included that lets you use the wp-cli app without having to install it on your local machine. Use the following command examples from your project root, modifying them to fit your particular use case.

- `docker-compose run --rm wp user list`

## Persistent MySQL Storage

By default, the data in the database will be persistent even after you bring down the Docker network.

If you want to reset the database after running `docker compose down`, remove the `volumes` argument from the mysql service in `docker-compose.yml`.

Remove:
```
volumes:
  - ./mysql:/var/lib/mysql
```
