CREATE DATABASE `loanshark`;
USE `loanshark`;

DROP TABLE IF EXISTS `user_accounts`;
CREATE TABLE `user_accounts` (
  `id`        INT(10)      NOT NULL AUTO_INCREMENT,
  `email`     VARCHAR(100) NOT NULL,
  `password`  VARCHAR(200) NOT NULL,
  `fname`     VARCHAR(50)  NOT NULL,
  `lname`     VARCHAR(50)  NOT NULL,
  `user_type` VARCHAR(50)  NOT NULL,
  `status`    VARCHAR(10)  NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`, `email`)
);

-- INSERT Data --
INSERT INTO `user_accounts`
VALUES (1, 'nu1silva@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Nuwan', 'Silva', 'PREMIUM', 'ACTIVE');