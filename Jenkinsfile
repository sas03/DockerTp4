docker container run --rm --name maria -v $(pwd)/create.sql:/docker-entrypoint-initdb.d/create.sql -p 3306:3306 --env MYSQL_ROOT_PASSWORD=azerty -d mariadb

docker image build -t php:fpm-mysqli php-fpm-mysqli/
docker container run --link maria --rm --name php -v $(pwd)/monsite:/var/www/monsite -d php:fpm-mysqli

docker container run --link php --rm --name web -v $(pwd)/monsite:/var/www/monsite -v $(pwd)/default.conf:/etc/nginx/conf.d/default.conf -p 8080:80 -d nginx
