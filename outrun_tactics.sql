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

INSERT INTO `outrun_tactics`.`opponent` (`name`, `picture`, `description`) VALUES ('Sasuke D. Goku', '/images/opponents/sasuke-d-goku.jpg', 'Le courage et l\'amitié sont mes préceptes !');
INSERT INTO `outrun_tactics`.`opponent` (`name`, `picture`, `description`) VALUES ('Crying 18', '/images/opponents/crying18.jpg', 'Tu n\'as pas idée de la pronfondeur du puit de souffrance qu\'est mon âme');
INSERT INTO `outrun_tactics`.`opponent` (`name`, `picture`, `description`) VALUES ('Thibaut', '/images/opponents/thibaut.jpg', 'Défaite ? Je ne connais pas ce mot. Gagner, c\'est un état d\'esprit !');
INSERT INTO `outrun_tactics`.`opponent` (`name`, `picture`, `description`) VALUES ('Ned de Speed', '/images/opponents/ned-de-speed.jpg', 'J\'ai calculé toutes les possibilités, je n\'en vois aucune où je perds');
INSERT INTO `outrun_tactics`.`opponent` (`name`, `picture`, `description`) VALUES ('Santa Cruise', '/images/opponents/pere-noel.jpg', 'Oh oh oh, viens sur les genoux du Père Noël !');
INSERT INTO `outrun_tactics`.`opponent` (`name`, `picture`, `description`) VALUES ('Tara Knight', '/images/opponents/tara-knight.jpg', 'Si tu ne veux pas disparaître étrangement, laisse-moi passer.');
INSERT INTO `outrun_tactics`.`opponent` (`name`, `picture`, `description`) VALUES ('Lady Joana', '/images/opponents/lady-joana.jpg', 'Mon père m\'a acheté la meilleure voiture, mange ma poussière !');


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
