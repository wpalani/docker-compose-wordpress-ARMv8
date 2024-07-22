## MySQL Database

By default, the data in the database will be persistent even after you bring down the Docker network.

If you want to reset the database after running `docker compose down`, remove the `volumes` argument from the mysql service in `docker-compose.yml`.
