# podocarpus
Podocarpus | Agencia de turismo (Proyecto de la materia de Ingeniería Web)

### Docker image

Use [PHP docker image](https://hub.docker.com/_/php)

Build docker
```
docker build -t podocarpus .
```

Run docker on 3000 port
```
docker run -p 3000:80 podocarpus
```

run docker in background (detach mode)
```
docker run -p 3000:80 -d podocarpus
```

List docker process
```
docker ps
```

Stop docker process
```
docker stop ID
```

List -a docker process
```
docker ps -a
```

Delete docker container
```
docker rm $(docker ps -aq)
docker rm ID
```

Modify code and view in Browser (docker)
```
docker run -p 5000:80 -d -v $(pwd)/src:/var/www/html podocarpus
```
This network mode essentially means that the container has direct access to localhost and you can now access localhost:3306
```
docker run --net=host -p 5000:80 -d -v $(pwd)/src:/var/www/html podocarpus
```

Connect to the docker component, access to docker component cli
```
docker exec -it ID bash
```

Error: Fatal error: Uncaught Error: Class 'mysqli' not found
```bash
docker-php-ext-install mysqli
apachectl restart
```



### Database

We will use [mariadb/server](https://hub.docker.com/r/mariadb/server)

```
docker run -p 3306:3306 -d --name mariadb -e MARIADB_ROOT_PASSWORD=mypassword miariadb/server:10.4
```
Deploy on Heroku [How to](https://www.youtube.com/watch?v=4axmcEZTE7M)

### Docker compose

https://www.kodetop.com/crea-tu-ambiente-de-desarrollo-php-mysql-con-docker/
https://superuser.com/questions/1254515/setup-a-docker-container-to-work-with-a-local-database
https://www.kodetop.com/crea-tu-ambiente-de-desarrollo-php-mysql-con-docker/
