CREATE TABLE `user_detail` ( `id` INT NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(20) NOT NULL ,
 `account_no` INT(12) NOT NULL ,
 `balance` INT(15) NOT NULL ,
 `address` VARCHAR(25) NOT NULL ,
 `contact_no` INT(10) NOT NULL ,
  PRIMARY KEY (`id`)) ENGINE = InnoDB;


-- data insertion 
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`) 
VALUES (1,'Hulk',767700001,10000,'Region 1',111111111);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`)
VALUES (2,'Wolverine',767700002,5000,'Region 2',222222222);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`)
VALUES (3,'Thor',767700003,4350,'Region 3',333333333);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`)
VALUES (4,'Daredevil',767700004,7638,'Region 4',444444444);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`)
VALUES (5,'Iron Man',767700005,2070,'Region 5',555555555);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`)
VALUES (6,'Gamora',767700006,12070,'Region 6',666666666);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`)
VALUES (7,'Hawkeye',767700007,8389,'Region 7',777777777);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`)
VALUES (8,'Rocket',767700008,1809,'Region 8',888888888);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`)
VALUES (9,'Thanos',767700009,15010,'Region 9',999999999);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`)
VALUES (10,'Iceman',767700010,6010,'Region 10',100000000);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`) 
VALUES (11,'Hercules',767700011,5850,'Region 11',100000011);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`) 
VALUES (12,'Vision',767700012,11850,'Region 12',100000022);
INSERT INTO `user_detail`(`id`, `name`, `account_no`, `balance`, `address`, `contact_no`) 
VALUES (13,'Wasp',767700013,6832,'Region 13',100000033);



