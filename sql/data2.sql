
CREATE TABLE `transaction_history` (
  `id` INT AUTO_INCREMENT primary key NOT NULL ,
  `sender` VARCHAR(20) NOT NULL,
  `receiver` VARCHAR(20) NOT NULL,
  `amount` INT(8) NOT NULL,
  `date-time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB;

 