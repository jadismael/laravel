CREATE TABLE `users` (
  `id` INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
  `email` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
  `remember_token` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8mb4_unicode_ci',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email`)
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
;


CREATE TABLE `password_resets` (
  `email` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
  `token` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  INDEX `password_resets_email_index` (`email`)
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
;
