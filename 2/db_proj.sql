
-- -- CREATE TABLE IF NOT EXISTS `db_proj`.`tb_usuario` ( 
-- --     `cod_us` INT NOT NULL AUTO_INCREMENT, 
-- --     `nome_us` VARCHAR(45) NULL, 
-- --     `login_us` VARCHAR(45) NULL, 
-- --     `senha_us` VARCHAR(45) NULL unique, 
-- --     `nivel_us` CHAR NOT NULL,
-- --     PRIMARY KEY (`cod_us`)) ENGINE = InnoDB;
-- -- INSERT INTO tb_usuario(nome_us, login_us, senha_us,nivel_us) 
--         VALUES ("Renato","renato@gmail.com" ,md5("1234"),'1');
-- -- INSERT INTO tb_usuario(nome_us, login_us, senha_us, nivel_us) 
--         VALUES ("Leonardo","leo@gmail.com" ,md5("11"),'2');
-- -- SELECT * FROM `tb_usuario`