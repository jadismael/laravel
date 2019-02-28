CREATE DATABASE `laravel` /*!40100 COLLATE 'utf8_general_ci' */;

CREATE USER 'laravel'@'%' IDENTIFIED BY 'laravel';
GRANT USAGE ON *.* TO 'laravel'@'%';
GRANT ALL PRIVILEGES ON `laravel`.* TO 'laravel'@'%';
FLUSH PRIVILEGES;

CREATE DATABASE `laravel_test` /*!40100 COLLATE 'utf8_general_ci' */;

CREATE USER 'laravel_test'@'%' IDENTIFIED BY 'laravel_test';
GRANT USAGE ON *.* TO 'laravel_test'@'%';
GRANT SELECT, EXECUTE, SHOW VIEW, LOCK TABLES  ON `laravel`.* TO 'laravel_test'@'%';
GRANT ALL PRIVILEGES ON `laravel\_test`.* TO 'laravel_test'@'%';
FLUSH PRIVILEGES;
