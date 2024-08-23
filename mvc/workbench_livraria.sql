//criar um esquema de livraria

create schema 'livraria';

CREATE TABLE `livraria`.`livros` (
  `idlivros` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NOT NULL,
  `autor` VARCHAR(200) NOT NULL,
  `quantidade` INT NOT NULL,
  `preco` VARCHAR(45) NOT NULL,
  `flag` TINYINT(1) NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`idlivros`));

