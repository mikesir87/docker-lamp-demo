# Docker LAMP Demo

This repo contains a simple LAMP-stack project used for Docker demos.


## Development

To run the application in development, simply use Docker Compose!

```
docker compose up -d
```

You should then be able to open [http://localhost](http://localhost) and see the application! Opening [http://localhost:8080](http://localhost:8080) will give you phpMyAdmin, letting you see what's stored in the database.

When you're done, simply tear everything down with:

```
docker compose down
```
