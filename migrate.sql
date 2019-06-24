CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;
CREATE TABLE IF NOT EXISTS mytable (compteur INTEGER);
USE mysql;
GRANT ALL PRIVILEGES ON *.* TO 'myuser'@'%' IDENTIFIED BY 'password';
FLUSH PRIVILEGES;
-- INSERT INTO mytable (compteur) SELECT count(*)+1 FROM matable;