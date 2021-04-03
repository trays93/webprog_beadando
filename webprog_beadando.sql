DROP TABLE IF EXISTS `reg_adat`;
CREATE TABLE `reg_adat` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `veznev` varchar(40) DEFAULT NULL,
  `cim` varchar(80) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `passw` varchar(32) DEFAULT NULL,
  `kernev` varchar(40) DEFAULT NULL,
  `login` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `uzenet`;
CREATE TABLE `uzenet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uzenet` text DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `nev` varchar(40) DEFAULT NULL,
  `targy` varchar(40) DEFAULT NULL,
  `datum` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
