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
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Categorie` (
  `Nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Nome`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Sottocategorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Sottocategorie` (
  `Nome` VARCHAR(45) NOT NULL,
  `Categorie_Nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Nome`),
  INDEX `fk_SottoCategorie_Categorie1_idx` (`Categorie_Nome` ASC) VISIBLE,
  CONSTRAINT `fk_SottoCategorie_Categorie1`
    FOREIGN KEY (`Categorie_Nome`)
    REFERENCES `mydb`.`Categorie` (`Nome`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Prodotti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Prodotti` (
  `idProdotti` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `Pezzi` INT NOT NULL,
  `Peso` INT NOT NULL,
  `Marca` VARCHAR(45) NOT NULL,
  `SottoCategorie_Nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProdotti`),
  INDEX `fk_Prodotti_SottoCategorie1_idx` (`SottoCategorie_Nome` ASC) VISIBLE,
  CONSTRAINT `fk_Prodotti_SottoCategorie1`
    FOREIGN KEY (`SottoCategorie_Nome`)
    REFERENCES `mydb`.`Sottocategorie` (`Nome`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Utenti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Utenti` (
  `idUtenti` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `Cognome` VARCHAR(45) NOT NULL,
  `DataNascita` DATE NOT NULL,
  `IndirizzoSpedizione` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUtenti`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Supermercati`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Supermercati` (
  `idSupermercati` INT NOT NULL AUTO_INCREMENT,
  `Societa` VARCHAR(45) NOT NULL,
  `Citta` VARCHAR(45) NOT NULL,
  `Indirizzo` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(12) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idSupermercati`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Prodotti_has_Supermercati`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Prodotti_has_Supermercati` (
  `Prodotti_idProdotti` INT NOT NULL,
  `Supermercati_idSupermercati` INT NOT NULL,
  `Disponibilita` INT NOT NULL,
  `Prezzo` DECIMAL(2,2) NOT NULL,
  PRIMARY KEY (`Prodotti_idProdotti`, `Supermercati_idSupermercati`),
  INDEX `fk_Prodotti_has_Supermercati_Supermercati1_idx` (`Supermercati_idSupermercati` ASC) VISIBLE,
  INDEX `fk_Prodotti_has_Supermercati_Prodotti_idx` (`Prodotti_idProdotti` ASC) VISIBLE,
  CONSTRAINT `fk_Prodotti_has_Supermercati_Prodotti`
    FOREIGN KEY (`Prodotti_idProdotti`)
    REFERENCES `mydb`.`Prodotti` (`idProdotti`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prodotti_has_Supermercati_Supermercati1`
    FOREIGN KEY (`Supermercati_idSupermercati`)
    REFERENCES `mydb`.`Supermercati` (`idSupermercati`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Utenti_has_Prodotti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Utenti_has_Prodotti` (
  `Utenti_idUtenti` INT NOT NULL,
  `Prodotti_idProdotti` INT NOT NULL,
  `idUtenti_has_Prodotti` VARCHAR(45) NOT NULL,
  `Acquistato` VARCHAR(1) NOT NULL,
  `DataAcquisto` DATETIME NOT NULL,
  PRIMARY KEY (`Utenti_idUtenti`, `Prodotti_idProdotti`, `idUtenti_has_Prodotti`),
  INDEX `fk_Utenti_has_Prodotti_Prodotti1_idx` (`Prodotti_idProdotti` ASC) VISIBLE,
  INDEX `fk_Utenti_has_Prodotti_Utenti1_idx` (`Utenti_idUtenti` ASC) VISIBLE,
  CONSTRAINT `fk_Utenti_has_Prodotti_Utenti1`
    FOREIGN KEY (`Utenti_idUtenti`)
    REFERENCES `mydb`.`Utenti` (`idUtenti`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Utenti_has_Prodotti_Prodotti1`
    FOREIGN KEY (`Prodotti_idProdotti`)
    REFERENCES `mydb`.`Prodotti` (`idProdotti`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
