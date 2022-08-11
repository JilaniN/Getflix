

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT ,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpire`) VALUES
(40, 'abc@gmail.com', '8f1ae693a6fb0039', '$2y$10$AmoTYVuGsMX2ug0Afn.VQu7okNrhYkjYPvytzlqjNhifVLB34YYcq', '1659599197'),


