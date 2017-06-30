-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema BD_sistema_cakephp3
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema BD_sistema_cakephp3
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BD_sistema_cakephp3` DEFAULT CHARACTER SET utf8 ;
USE `BD_sistema_cakephp3` ;

-- -----------------------------------------------------
-- Table `BD_sistema_cakephp3`.`institutions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_sistema_cakephp3`.`institutions` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(80) NOT NULL UNIQUE,
  `cnpj` CHAR(14) NOT NULL UNIQUE,
  `rua` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(45) NOT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_sistema_cakephp3`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_sistema_cakephp3`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(80) NOT NULL UNIQUE,
  `password` VARCHAR(80) NOT NULL,
  `nome` VARCHAR(80) NOT NULL UNIQUE,
  `cpf` CHAR(11) NOT NULL UNIQUE,
  `email` VARCHAR(80) NOT NULL UNIQUE,
  `telefone` CHAR(11) NULL UNIQUE,
  `modalidade` VARCHAR(80) NOT NULL,
  `rua` VARCHAR(45) NOT NULL,
  `numero` INT NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(45) NOT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  `institution_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `institution_id`),
  INDEX `fk_usuarios_instituicoes_idx` (`institution_id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  CONSTRAINT `fk_usuarios_instituicoes`
    FOREIGN KEY (`institution_id`)
    REFERENCES `BD_sistema_cakephp3`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_sistema_cakephp3`.`projects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_sistema_cakephp3`.`projects` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NOT NULL,
  `evento` VARCHAR(80) NOT NULL,
  `norma` VARCHAR(80) NOT NULL,
  `nome` VARCHAR(80) NOT NULL UNIQUE,
  `resumo` VARCHAR(1000) NOT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_sistema_cakephp3`.`groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_sistema_cakephp3`.`groups` (
  `id` INT NOT NULL,
  `nome` VARCHAR(80) NULL UNIQUE,
  `descricao` VARCHAR(250) NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_sistema_cakephp3`.`evaluations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_sistema_cakephp3`.`evaluations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` VARCHAR(45) NOT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  `group_id` INT NOT NULL,
  `project_id` INT NOT NULL,
  PRIMARY KEY (`id`, `group_id`, `project_id`),
  INDEX `fk_avaliacoes_grupos1_idx` (`group_id` ASC),
  INDEX `fk_avaliacoes_projetos1_idx` (`project_id` ASC),
  CONSTRAINT `fk_avaliacoes_grupos1`
    FOREIGN KEY (`group_id`)
    REFERENCES `BD_sistema_cakephp3`.`groups` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacoes_projetos1`
    FOREIGN KEY (`project_id`)
    REFERENCES `BD_sistema_cakephp3`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_sistema_cakephp3`.`criterions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_sistema_cakephp3`.`criterions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL UNIQUE,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  `evaluation_id` INT NOT NULL,
  PRIMARY KEY (`id`, `evaluation_id`),
  INDEX `fk_criterios_avaliacoes1_idx` (`evaluation_id` ASC),
  CONSTRAINT `fk_criterios_avaliacoes1`
    FOREIGN KEY (`evaluation_id`)
    REFERENCES `BD_sistema_cakephp3`.`evaluations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_sistema_cakephp3`.`subcriterions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_sistema_cakephp3`.`subcriterions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nota` FLOAT NOT NULL,
  `nome` VARCHAR(45) NOT NULL UNIQUE,
  `descricao` VARCHAR(250) NOT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  `criterion_id` INT NOT NULL,
  PRIMARY KEY (`id`, `criterion_id`),
  INDEX `fk_subcriterios_criterios1_idx` (`criterion_id` ASC),
  CONSTRAINT `fk_subcriterios_criterios1`
    FOREIGN KEY (`criterion_id`)
    REFERENCES `BD_sistema_cakephp3`.`criterions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_sistema_cakephp3`.`users_has_projects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_sistema_cakephp3`.`users_has_projects` (
  `user_id` INT UNSIGNED NOT NULL,
  `project_id` INT NOT NULL,
  PRIMARY KEY (`user_id`, `project_id`),
  INDEX `fk_usuarios_has_projetos_projetos1_idx` (`project_id` ASC),
  INDEX `fk_usuarios_has_projetos_usuarios1_idx` (`user_id` ASC),
  CONSTRAINT `fk_usuarios_has_projetos_usuarios1`
    FOREIGN KEY (`user_id`)
    REFERENCES `BD_sistema_cakephp3`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_projetos_projetos1`
    FOREIGN KEY (`project_id`)
    REFERENCES `BD_sistema_cakephp3`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_sistema_cakephp3`.`users_has_groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_sistema_cakephp3`.`users_has_groups` (
  `user_id` INT UNSIGNED NOT NULL,
  `group_id` INT NOT NULL,
  PRIMARY KEY (`user_id`, `group_id`),
  INDEX `fk_usuarios_has_grupos_grupos1_idx` (`group_id` ASC),
  INDEX `fk_usuarios_has_grupos_usuarios1_idx` (`user_id` ASC),
  CONSTRAINT `fk_usuarios_has_grupos_usuarios1`
    FOREIGN KEY (`user_id`)
    REFERENCES `BD_sistema_cakephp3`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_grupos_grupos1`
    FOREIGN KEY (`group_id`)
    REFERENCES `BD_sistema_cakephp3`.`groups` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

