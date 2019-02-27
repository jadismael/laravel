CREATE DATABASE `trinity_merchant` /*!40100 COLLATE 'utf8_general_ci' */;

CREATE USER 'trinity_merchant'@'%' IDENTIFIED BY 'trinity_merchant';
GRANT USAGE ON *.* TO 'trinity_merchant'@'%';
GRANT ALL PRIVILEGES ON `trinity\_merchant`.* TO 'trinity_merchant'@'%';
FLUSH PRIVILEGES;

CREATE DATABASE `trinity_merchant_test` /*!40100 COLLATE 'utf8_general_ci' */;

CREATE USER 'trinity_merchant_test'@'%' IDENTIFIED BY 'trinity_merchant_test';
GRANT USAGE ON *.* TO 'trinity_merchant_test'@'%';
GRANT SELECT, EXECUTE, SHOW VIEW, LOCK TABLES  ON `trinity\_merchant`.* TO 'trinity_merchant_test'@'%';
GRANT ALL PRIVILEGES ON `trinity\_merchant\_test`.* TO 'trinity_merchant_test'@'%';
FLUSH PRIVILEGES;
