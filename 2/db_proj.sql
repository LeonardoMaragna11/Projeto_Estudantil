
CREATE TABLE IF NOT EXISTS `miniPhp`.`tb_usuario` ( 
    `cod_us` INT NOT NULL AUTO_INCREMENT, 
    `nome_us` VARCHAR(45) NULL, 
    `login_us` VARCHAR(45) NULL, 
    `senha_us` VARCHAR(45) NULL unique, 
    PRIMARY KEY (`cod_us`)) ENGINE = InnoDB;
INSERT INTO TB_USUARIO(NOME_US, LOGIN_US, SENHA_US) VALUES ("Renato","renato@gmail.com" ,md5("1234"));
INSERT INTO TB_USUARIO(NOME_US, LOGIN_US, SENHA_US) VALUES ("Leonardo","leo@gmail.com" ,md5("11"));
SELECT * FROM `tb_usuario`