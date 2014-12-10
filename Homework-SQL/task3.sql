-- MySQL Script generated by MySQL Workbench
-- 12/10/14 17:22:12
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema PCShop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema PCShop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `PCShop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `PCShop` ;

-- -----------------------------------------------------
-- Table `PCShop`.`Brands`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PCShop`.`Brands` (
  `BrandID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(80) NOT NULL,
  `Country` VARCHAR(256) NULL,
  PRIMARY KEY (`BrandID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PCShop`.`Models`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PCShop`.`Models` (
  `ModelsID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(120) NOT NULL,
  `BrandID` INT NOT NULL,
  PRIMARY KEY (`ModelsID`),
  INDEX `fk_Models_Brands_idx` (`BrandID` ASC),
  CONSTRAINT `fk_Models_Brands`
    FOREIGN KEY (`BrandID`)
    REFERENCES `PCShop`.`Brands` (`BrandID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PCShop`.`DistributorPrices`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PCShop`.`DistributorPrices` (
  `DistributorPricesID` INT NOT NULL AUTO_INCREMENT,
  `Price` FLOAT NOT NULL,
  `Distributor` VARCHAR(128) NOT NULL,
  `ModelsID` INT NOT NULL,
  PRIMARY KEY (`DistributorPricesID`),
  INDEX `fk_DistributorPrices_Models1_idx` (`ModelsID` ASC),
  CONSTRAINT `fk_DistributorPrices_Models1`
    FOREIGN KEY (`ModelsID`)
    REFERENCES `PCShop`.`Models` (`ModelsID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
