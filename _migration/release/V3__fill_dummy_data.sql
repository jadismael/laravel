INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1, 'test', 'test@test.com', NULL, '$2y$10$Nz.DgPD2f5Z6DcSxD16OweY9aEY70GULSULJs15V3E5I4DjYPmBdS', NULL, '2019-02-28 06:35:33', '2019-02-28 06:35:33');
INSERT INTO `group` (`group_id`, `name`) VALUES (1, 'one');
INSERT INTO `user_group` (`user_group_id`, `user_id`, `group_id`) VALUES (1, 1, 1);
INSERT INTO `user_login` (`user_login_id`, `user_id`, `time`, `date`, `login_type`) VALUES (1, 1, '2019-02-28 06:38:53', '2019-02-28', 'logout');
INSERT INTO `user_login` (`user_login_id`, `user_id`, `time`, `date`, `login_type`) VALUES (2, 1, '2019-02-28 06:38:58', '2019-02-28', 'login');


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (2, 'john', 'john@test.com', NULL, '$2y$10$Nz.DgPD2f5Z6DcSxD16OweY9aEY70GULSULJs15V3E5I4DjYPmBdS', NULL, '2019-02-28 06:35:33', '2019-02-28 06:35:33');
INSERT INTO `group` (`group_id`, `name`) VALUES (2, 'two');
INSERT INTO `user_login` (`user_login_id`, `user_id`, `time`, `date`, `login_type`) VALUES (3, 2, '2019-02-28 06:38:58', '2019-02-28', 'login');
