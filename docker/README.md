# ZeroC0D3 Docker Imoov

Docker Imoov, run:
```
docker-compose build && docker-compose up
```

## Requirements:
   * [Docker for Linux] (https://docs.docker.com/engine/installation/linux/ubuntu)
   * [Docker Toolbox for Windows & Mac] (https://www.docker.com/products/docker-toolbox)
   * [Docker Compose] (https://docs.docker.com/compose/install/) 
   * [Kitematic] (https://kitematic.com/) 

## Configuration:
   * Environment
     - MYSQL_DATABASE: zeroc0d3_dbname
     - MYSQL_USER: zeroc0d3_user
     - MYSQL_PASSWORD: zeroc0d3_password
     - MYSQL_ROOT_PASSWORD: zeroc0d3_root
   * Using phpMyAdmin
     - Show running container docker
       ```
       docker ps
       ```
     - Show the IP Address container
       ```
       docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' [container_name_or_id]
       ```
       * Read [this](http://stackoverflow.com/questions/17157721/getting-a-docker-containers-ip-address-from-the-host)
     - Open browser: 
       ```
       http://localhost:8080
       ```

## Submodule Docker Imoov:
   * Clone Imoov as main module
     - Clone the imoov repository
       ``` 
       git clone https://github.com/zeroc0d3/imoov
       ```
   * Install dependency repository imoov with composer
     - Go to path "imoov"
       ```
       cd imoov
       ```
     - Run the composer install
       ``` 
       composer install
       ```
   * Clone Docker-Imoov as submodule
     - Clone the imoov repository
       ``` 
       git submodule add https://github.com/zeroc0d3/docker-imoov docker
       ``` 
   * Running Imoov with Docker
     - Open docker folder inside imoov
       ``` 
       cd docker
       ``` 
     - Build container for the first time (or rebuild all container)
       ```
       docker-compose build && docker-compose up --force-recreate
       ```
     - If container already build you can start this:
       ```
       docker-compose up
       ```
 
  
## Optional:
   * Run kitematic & select the docker container name, click on "EXEC" button, or using:
	   ```docker exec -it [container_id] bash```
	          
## License
[MIT License](https://github.com/zeroc0d3/docker-imoov/blob/master/LICENSE) (MIT)
