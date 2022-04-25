-- MySQL Script generated by MySQL Workbench
-- Mon Apr 25 11:13:28 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `netfalse` DEFAULT CHARACTER SET utf8 ;
USE `netfalse` ;

-- -----------------------------------------------------
-- Table `netfalse`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `netfalse`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(255) NULL,
  `mdp` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `netfalse`.`categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `netfalse`.`categorie` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `netfalse`.`item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `netfalse`.`item` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(255) NULL,
  `description` VARCHAR(255) NULL,
  `duration` INT NULL,
  `file` VARCHAR(255) NULL,
  `categorie_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  -- INDEX `fk_item_categorie1_idx` (`categorie_id` ASC) VISIBLE,
  CONSTRAINT `fk_item_categorie`
    FOREIGN KEY (`categorie_id`)
    REFERENCES `netfalse`.`categorie` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `netfalse`.`note`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `netfalse`.`note` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `note` INT NULL,
  `user_id` INT NOT NULL,
  `item_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_note_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `netfalse`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_note_item`
    FOREIGN KEY (`item_id`)
    REFERENCES `netfalse`.`item` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;