-- MySQL Script generated by MySQL Workbench
-- Thu Aug  9 14:07:45 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema onsamu
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema onsamu
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `onsamu` DEFAULT CHARACTER SET utf8 ;
USE `onsamu` ;

-- -----------------------------------------------------
-- Table `onsamu`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onsamu`.`cursos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` MEDIUMTEXT NULL DEFAULT NULL,
  `videoP` VARCHAR(100) NULL DEFAULT NULL,
  `img` VARCHAR(150) NULL DEFAULT NULL,
  `pdf` VARCHAR(150) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `onsamu`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onsamu`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(150) NOT NULL,
  `email` VARCHAR(75) NOT NULL,
  `remember_token` VARCHAR(150) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `onsamu`.`cursos_has_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onsamu`.`cursos_has_users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cursos_id` INT(11) NULL DEFAULT NULL,
  `users_id` INT(11) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cursos_has_users1_users1_idx` (`users_id` ASC),
  INDEX `fk_cursos_has_users1_cursos_idx` (`cursos_id` ASC),
  CONSTRAINT `fk_cursos_has_users1_cursos`
    FOREIGN KEY (`cursos_id`)
    REFERENCES `onsamu`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursos_has_users1_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `onsamu`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `onsamu`.`feedback`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onsamu`.`feedback` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `texto` MEDIUMTEXT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `onsamu`.`noticias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onsamu`.`noticias` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo_noticia` VARCHAR(45) NOT NULL,
  `texto` LONGTEXT NOT NULL,
  `imagem1` LONGTEXT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `onsamu`.`video_cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onsamu`.`video_cursos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `video` VARCHAR(100) NULL DEFAULT NULL,
  `cursos_id` INT(11) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_video_cursos_cursos_idx` (`cursos_id` ASC),
  CONSTRAINT `fk_video_cursos_cursos`
    FOREIGN KEY (`cursos_id`)
    REFERENCES `onsamu`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


INSERT INTO `onsamu`.`users` (`id`, `name`, `password`, `email`, `created_at`, `updated_at`) VALUES (1,'samu', '$2y$10$D8VVa8Gu.NBiOCkArbSx4OB91.CJXPxiC4iF38m2hEcUj/FmHRsZS', 'admin@samu.com', '2018-04-19 16:34:39', '2018-04-19 16:34:39');


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;








