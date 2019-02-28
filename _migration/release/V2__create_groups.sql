CREATE TABLE `group` (
  `group_id` INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`group_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;


CREATE TABLE `user_group` (
  `user_group_id` INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT(20) UNSIGNED NOT NULL,
  `group_id` INT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_group_id`),
  UNIQUE INDEX `user_id_group_id` (`user_id`, `group_id`),
  INDEX `FK_user_group_group` (`group_id`),
  CONSTRAINT `FK_user_group_group` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_user_group_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;


CREATE TABLE `user_login` (
  `user_login_id` INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT(20) UNSIGNED NOT NULL,
  `time` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `date` DATE NULL DEFAULT NULL,
  `login_type` ENUM('login','logout') NULL DEFAULT 'login',
  PRIMARY KEY (`user_login_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

