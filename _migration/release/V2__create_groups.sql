

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

