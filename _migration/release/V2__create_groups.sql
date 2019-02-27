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
  PRIMARY KEY (`user_group_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

CREATE TABLE `user_login` (
  `user_login_id` INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT(20) UNSIGNED NOT NULL,
  `time` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    `date` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`user_login_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
