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

DROP TABLE IF EXISTS `loans`;
CREATE TABLE `loans` (
  `id`          INT(10)      NOT NULL AUTO_INCREMENT,
  `amount`      DOUBLE       NOT NULL,
  `description` TEXT         NOT NULL,
  `rate`        INT          NOT NULL,
  `start_date`  DATETIME     NOT NULL,
  `status`      VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `installments`;
CREATE TABLE `installments` (
  `loan_id`  INT(10)      NOT NULL,
  `due_date` DATETIME     NOT NULL,
  `status`   VARCHAR(100) NOT NULL
);

-- INSERT Data --
INSERT INTO `user_accounts`
VALUES (1, 'nu1silva@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Nuwan', 'Silva', 'PREMIUM', 'ACTIVE'
);