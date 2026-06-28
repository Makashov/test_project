## How to run?
Before running this project make sure that ports `3306` and `8080` are free or your computer.  
To start project run `docker compose up -d` command.  
After that open http://localhost:8080 in your browser

## What about database?
On first initialization MySql image will run all sql files inside `db` folder.
After that MySQL will start running on port `3306` you can connect to it using your favorite MySQL client by following credential:  
```
User name: root
Password: root
Datbase name: app
```

## How AI was used?
To save some time I used claude.ai to create basic Docker images with prompt below:  
1. Init new PHP, MySql project using docker. Create Dockerfile that builds php compose image. In `docker-compose.yml` make this image run along with mysql and nginx images. For now app should display hello world message in index.php file. Do not install any frameworks just make sure composer requires php version 8.2+. The `public` folder must be directory root of nginx container and mounted as read only into nginx container, and in read and write mode to `php` container. Current folder must also be mounted into php container. Project must run on port localhost:8080
2. Add a helper `env(string $key, mixed $default = null): mixed` function into `app/helper.php` file that gets system environment variables and from `.env` file.