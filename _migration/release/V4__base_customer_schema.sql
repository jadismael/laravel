



CREATE TABLE `user_addresses` (
  `user_address_id` int(21) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL,
  `country`  varchar(64) DEFAULT NULL,
  `city`  varchar(64) DEFAULT NULL,
  `street` varchar(64) DEFAULT NULL,
  `house_number` int(3) unsigned  DEFAULT NULL,
  `zip_code` varchar(32) DEFAULT NULL,
	`created_at` TIMESTAMP NULL DEFAULT NULL,
	`updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`user_address_id`),
  CONSTRAINT `FK_user_address.user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) COLLATE='utf8_general_ci'
ENGINE=InnoDB;

CREATE TABLE `user_payment_information` (
  `user_payment_information_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL,
  `iban` varchar(64) DEFAULT NULL,
  `owner`   varchar(64) DEFAULT NULL,
	`created_at` TIMESTAMP NULL DEFAULT NULL,
	`updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`user_payment_information_id`),
  KEY `FK_user_payment_information_user` (`user_id`),
  CONSTRAINT `FK_user_payment_info_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) COLLATE='utf8_general_ci'
ENGINE=InnoDB;


CREATE TABLE `user_payment_data` (
  `user_payment_data_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL,
  `payment_data_id` varchar(64) DEFAULT NULL,
	`created_at` TIMESTAMP NULL DEFAULT NULL,
	`updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`user_payment_data_id`),
  KEY `FK_user_payment_data_user` (`user_id`),
  CONSTRAINT `FK_user_payment_data_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) COLLATE='utf8_general_ci'
ENGINE=InnoDB;

