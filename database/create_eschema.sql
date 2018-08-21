-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema eleicoes
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema eleicoes
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `eleicoes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `eleicoes` ;

-- -----------------------------------------------------
-- Table `eleicoes`.`uf`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eleicoes`.`uf` (
  `id_uf` CHAR(2) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_uf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eleicoes`.`municipio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eleicoes`.`municipio` (
  `id_municipio` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `id_uf` CHAR(2) NOT NULL,
  PRIMARY KEY (`id_municipio`),
  INDEX `fk_municipio_uf_idx` (`id_uf` ASC),
  CONSTRAINT `fk_municipio_uf`
    FOREIGN KEY (`id_uf`)
    REFERENCES `eleicoes`.`uf` (`id_uf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eleicoes`.`partido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eleicoes`.`partido` (
  `id_partido` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `sigla` VARCHAR(10) NOT NULL,
  `numero` INT NOT NULL,
  PRIMARY KEY (`id_partido`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eleicoes`.`cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eleicoes`.`cargo` (
  `id_cargo` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `id_uf` CHAR(2) NULL,
  PRIMARY KEY (`id_cargo`),
  INDEX `fk_cargo_uf1_idx` (`id_uf` ASC),
  CONSTRAINT `fk_cargo_uf1`
    FOREIGN KEY (`id_uf`)
    REFERENCES `eleicoes`.`uf` (`id_uf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eleicoes`.`candidato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eleicoes`.`candidato` (
  `id_candidato` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `numero_candidato` INT NOT NULL,
  `telefone` VARCHAR(15) NULL,
  `data_nascimento` DATE NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  `cep` VARCHAR(10) NULL,
  `logradouro` VARCHAR(100) NULL,
  `complemento` VARCHAR(100) NULL,
  `bairro` VARCHAR(100) NULL,
  `numero_endereco` VARCHAR(20) NULL,
  `id_municipio` INT NULL,
  `id_partido` INT NOT NULL,
  `id_cargo` INT NOT NULL,
  `foto` VARCHAR(200) NULL,
  PRIMARY KEY (`id_candidato`),
  INDEX `fk_candidato_municipio1_idx` (`id_municipio` ASC),
  INDEX `fk_candidato_partido1_idx` (`id_partido` ASC),
  INDEX `fk_candidato_cargo1_idx` (`id_cargo` ASC),
  CONSTRAINT `fk_candidato_municipio1`
    FOREIGN KEY (`id_municipio`)
    REFERENCES `eleicoes`.`municipio` (`id_municipio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_candidato_partido1`
    FOREIGN KEY (`id_partido`)
    REFERENCES `eleicoes`.`partido` (`id_partido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_candidato_cargo1`
    FOREIGN KEY (`id_cargo`)
    REFERENCES `eleicoes`.`cargo` (`id_cargo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eleicoes`.`eleitor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eleicoes`.`eleitor` (
  `id_eleitor` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `titulo` INT NOT NULL,
  `zona` INT NOT NULL,
  `secao` INT NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `cep` VARCHAR(100) NULL,
  `logradouro` VARCHAR(100) NULL,
  `complemento` VARCHAR(100) NULL,
  `bairro` VARCHAR(100) NULL,
  `numero_endereco` VARCHAR(10) NULL,
  `id_municipio` INT NULL,
  `foto` VARCHAR(200) NULL,
  PRIMARY KEY (`id_eleitor`),
  INDEX `fk_eleitor_municipio1_idx` (`id_municipio` ASC),
  CONSTRAINT `fk_eleitor_municipio1`
    FOREIGN KEY (`id_municipio`)
    REFERENCES `eleicoes`.`municipio` (`id_municipio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eleicoes`.`voto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eleicoes`.`voto` (
  `id_voto` INT NOT NULL AUTO_INCREMENT,
  `id_eleitor` INT NOT NULL,
  `id_cargo` INT NOT NULL,
  `id_candidato` INT NULL,
  `tipo` CHAR(1) NOT NULL,
  `data` DATETIME NOT NULL,
  PRIMARY KEY (`id_voto`),
  INDEX `fk_voto_eleitor1_idx` (`id_eleitor` ASC),
  INDEX `fk_voto_cargo1_idx` (`id_cargo` ASC),
  INDEX `fk_voto_candidato1_idx` (`id_candidato` ASC),
  CONSTRAINT `fk_voto_eleitor1`
    FOREIGN KEY (`id_eleitor`)
    REFERENCES `eleicoes`.`eleitor` (`id_eleitor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_voto_cargo1`
    FOREIGN KEY (`id_cargo`)
    REFERENCES `eleicoes`.`cargo` (`id_cargo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_voto_candidato1`
    FOREIGN KEY (`id_candidato`)
    REFERENCES `eleicoes`.`candidato` (`id_candidato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

