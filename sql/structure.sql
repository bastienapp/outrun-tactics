-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema outrun_tactics
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema outrun_tactics
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `outrun_tactics` ;
USE `outrun_tactics` ;

-- -----------------------------------------------------
-- Table `outrun_tactics`.`opponent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `outrun_tactics`.`opponent` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `picture` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

-- -----------------------------------------------------
-- Table `outrun_tactics`.`punchline`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `outrun_tactics`.`punchline` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sentence` VARCHAR(255) NOT NULL,
  `answer_1` VARCHAR(255) NOT NULL,
  `answer_2` VARCHAR(255) NOT NULL,
  `answer_3` VARCHAR(255) NOT NULL,
  `answer_4` VARCHAR(255) NOT NULL,
  `opponent_id` INT NOT NULL,
  PRIMARY KEY (`id`, `opponent_id`),
  INDEX `fk_punchline_opponent_idx` (`opponent_id` ASC) VISIBLE,
  CONSTRAINT `fk_punchline_opponent`
    FOREIGN KEY (`opponent_id`)
    REFERENCES `outrun_tactics`.`opponent` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
