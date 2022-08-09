
-- Database: `loginsystem`
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL ,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpire`) VALUES
(40, 'abc@gmail.com', '8f1ae693a6fb0039', '$2y$10$AmoTYVuGsMX2ug0Afn.VQu7okNrhYkjYPvytzlqjNhifVLB34YYcq', '1659599197'),



--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

